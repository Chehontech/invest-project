<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Settings;
use App\Models\Blog;
use App\Models\Logo;
use App\Models\Currency;
use App\Models\Social;
use App\Models\Faq;
use App\Models\Category;
use App\Models\Page;
use App\Models\Design;
use App\Models\About;
use App\Models\Review;
use App\Models\User;
use App\Models\Plans;
use App\Models\Profits;
use App\Models\Sandprofits;
use App\Models\Services;
use App\Models\Gateway;
use App\Models\Transfer;
use App\Models\Team;
use App\Models\Deposits;
use App\Models\Banktransfer;
use App\Models\Withdraw;
use App\Models\Claimed;
use App\Models\Brands;
use App\Models\Savings;
use Illuminate\Support\Facades\View;
use App\Lib\CoinPaymentHosted;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function($view){
            $currency=Currency::whereStatus(1)->first();
            $set=Settings::first();
            if($set->ns==1){
                if($set->next_settlement<Carbon::now()){
                    $dt = Carbon::now();
                    $dt->add($set->duration.' '.$set->period); 
                    $set->next_settlement=$dt;
                    $set->save();  
                } 
                $pcheck=Withdraw::wherestatus(0)->where('next_settlement', '<', $set->next_settlement)->get();
                foreach($pcheck as $xcheck){
                    $xcheck->next_settlement=$set->next_settlement;
                    $xcheck->save();
                }
            }
            if (Auth::guard('user')->check()){
                $user=User::find(Auth::guard('user')->user()->id);
                $currency=Currency::whereStatus(1)->first();
                if(empty($user->image)){
                    $cast="personx.jpg";
                }else{
                    $cast=$user->image;
                }
                //Check for pending coinpayment transactions
                    $depo=Deposits::whereStatus(0)->whereuser_id($user->id)->where('txn_id', '!=', 'null')->get();  
                    foreach($depo as $val){
                        if($val->gateway['id']==505){
                            $method = Gateway::find(505);
                            $cps = new CoinPaymentHosted();
                            $cps->Setup($method->val2, $method->val1);
                            $req = array(
                                'txid' => $val->txn_id,
                            );
                            $result = $cps->ViewTransaction($req);
                            $status=$result['result']['status'];
                            if($status>=100 || $status==2){
                                $user->balance=$user->balance + $val->amount - $val->charge;
                                $user->update();
                                $val->status = 1;
                                $val->update();            
                            }elseif($status<0){
                                $val->status = 2;
                                $val->update();
                            }
                        }elseif($val->gateway['id']==506){
                            $method = Gateway::find(506);
                            $cps = new CoinPaymentHosted();
                            $cps->Setup($method->val2, $method->val1);
                            $req = array(
                                'txid' => $val->txn_id,
                            );
                            $result = $cps->ViewTransaction($req);
                            $status=$result['result']['status'];
                            if($status>=100 || $status==2){
                                $user->balance=$user->balance + $val->amount - $val->charge;
                                $user->update();
                                $val->status = 1;
                                $val->update();            
                            }elseif($status<0){
                                $val->status = 2;
                                $val->update();
                            }
                        }elseif($val->gateway_id==507){
                            $method = Gateway::find(507);
                            $curl = curl_init();
                            curl_setopt_array($curl, 
                                array(
                                    CURLOPT_URL => "https://api.commerce.coinbase.com/charges/".$val->secret."/resolve",
                                    CURLOPT_RETURNTRANSFER => true,
                                    CURLOPT_ENCODING => "",
                                    CURLOPT_MAXREDIRS => 10,
                                    CURLOPT_TIMEOUT => 30,
                                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                    CURLOPT_CUSTOMREQUEST => "POST",
                                    CURLOPT_HTTPHEADER => array(
                                        "X-CC-Api-Key: ".$method->val1,
                                        "X-CC-Version: 2018-03-22",
                                        "content-type: multipart/form-data"
                                    ),
                                )
                            );
                            $response = curl_exec($curl);
                            $err = curl_error($curl);
                            curl_close($curl);
                            $result=json_decode($response);
                            if($result->data->payments->status=="CONFIRMED"){
                                $user->balance=$user->balance + $val->amount - $val->charge;
                                $user->update();
                                $val->status = 1;
                                $val->update();            
                            }
                        }
                    } 
                //             
                $history=Claimed::whereuser_id(Auth::guard('user')->user()->id)->where('amount','!=',null)->get();
                $view->with('user', $user );
                $view->with('cast', $cast );
                $view->with('history', $history);
            }
            $sandprofit=Sandprofits::all();
            foreach($sandprofit as $xpro){
                $profits=Sandprofits::whereid($xpro->id)->first();
                if (Carbon::today()>$xpro->expiring_date && $xpro->status==1){
                    $user=User::whereid($xpro->user_id)->first();   
                    $profits->status=2;
                    $profits->save();
                    $user->profit=$user->profit+$profits->profit;
                    $user->total_profit=$user->total_profit+$profits->profit;
                    $user->save();
                    if($set->email_notify==1){
                        new_withdraw($token);
                    }
                    $ph['user_id'] = $xpro->user_id;
                    $ph['profit_id'] = $xpro->id;
                    $ph['type'] = 1;
                    $ph['amount'] = $profits->profit;
                    $ph['date'] = Carbon::today();
                    $ph['ref']=$token='HIS-'.str_random(6);
                    Claimed::create($ph);
                }
            }
            $transfer=Transfer::where('temp', '!=', null)->wherestatus(0)->get();
            foreach($transfer as $val){
                $date1=Carbon::now();
                $date2=Carbon::parse($val->created_at);
                $check=$date1->diffInDays($date2);
                if($check==5 || $check>5){
                    $sender=User::whereid($val->sender_id)->first();
                    $sender->balance=$val->amount+$sender->balance;
                    $sender->save();
                    $val->status=2;
                    $val->save();
                }
            }
            $profit=$data['profit']=Profits::all();
            foreach($profit as $xpro){
                $user=User::whereid($xpro->user_id)->first(); 
                $profits=Profits::whereId($xpro->id)->first();
                $date_diff=date_diff(date_create($xpro->date), date_create(Carbon::now()));
                $date_diffx=date_diff(date_create($xpro->date), date_create($xpro->end_date));
                $ndate=$xpro->end_date;   
                if (Carbon::now()<$ndate){
                    $profits->profit=$xpro->percent*$xpro->amount/100*$date_diff->format('%R%a');
                    $outcome=$xpro->compound*$xpro->amount/100;
                    $capital=$xpro->amount;
                    $castro_profit=$outcome-$capital;
                    $real_profit=($xpro->percent*$xpro->amount/100*$date_diff->format('%R%a'))-$xpro->amount;
                    if($real_profit>0){
                        $profits->real_profit=$real_profit;
                    }else{
                        $profits->real_profit=$xpro->percent*$xpro->amount/100*$date_diff->format('%R%a');
                    }
                    $profits->save();
                }else{
                    $fdate=$xpro->compound*$xpro->amount/100;
                    $profits->profit=$fdate;
                    $outcome=$xpro->compound*$xpro->amount/100;
                    $capital=$xpro->amount;
                    $castro_profit=$outcome-$capital;
                    $real_profit=($xpro->percent*$xpro->amount/100*$date_diff->format('%R%a'))-$xpro->amount;
                    if($real_profit>0){
                        $profits->real_profit=$real_profit;
                    }else{
                        $profits->real_profit=($xpro->compound*$xpro->amount/100)-$xpro->amount;
                    }
                    $profits->save();  
                    if($xpro->status==1){
                        $profits->status=2;
                        $profits->save();
                        $amount=$xpro->real_profit-$xpro->claimed;
                        //Profit
                        $user->profit=$user->profit+$amount;
                        $user->total_profit=$user->total_profit+$amount;
                        $user->save();
                        $ph['user_id'] = $xpro->user_id;
                        $ph['profit_id'] = $xpro->id;
                        $ph['amount'] = $amount;
                        $ph['date'] = Carbon::today();
                        $ph['ref']=$token='HIS-'.str_random(6);
                        Claimed::create($ph);
                        //Balance
                        $user->balance=$user->balance+$xpro->amount;
                        $user->save();
                        $ch['user_id'] = $xpro->user_id;
                        $ch['profit_id'] = $xpro->id;
                        $ch['amount'] = $xpro->amount;
                        $ch['date'] = Carbon::today();
                        $ch['ref']=$token='HIS-'.str_random(6);
                        Claimed::create($ch);
                        //Bonus
                        if($xpro->c_bonus!=null && $user->upgrade==1){
                            $user->profit=$user->profit+$xpro->bonus;
                            $user->trade_bonus=$user->trade_bonus+$xpro->bonus;
                            $user->save();  
                            $profits->$xpro->bonus;
                            $profits->save();
                            $bh['user_id'] = $xpro->user_id;
                            $bh['profit_id'] = $xpro->id;
                            $bh['amount'] = $xpro->bonus;
                            $bh['date'] = Carbon::today();
                            $bh['ref']=$token='HIS-'.str_random(6);
                            Claimed::create($bh);
                            $profits->bonus_paid=1;
                            $profits->save();
                            if($set->email_notify==1){
                                send_email($user->email, $user->site_name, 'You just Received a Bonus', 'Bonus from '.$xpro->trx.' has been credited to your account. Thanks for choosing us.'); 
                            }
                        }
                        if($set->email_notify==1){
                            send_email($user->email, $user->site_name, 'Investment has ended', 'Profit from '.$xpro->trx.' has been credited to your account. Thanks for choosing us.');
                        }
                        //Recurring
                        if($xpro->c_r==1){
                            if($user->balance>$xpro->amount || $user->balance==$xpro->amount){
                                $user->balance=$user->balance-$xpro->amount;
                                $user->save();
                                $xstart_date=date_create(Carbon::now());
                                date_add($xstart_date, date_interval_create_from_date_string($xpro->plan->duration.' '.$xpro->plan->period));
                                $xndate=date_format($xstart_date, "Y-m-d H:i:s");
                                $profits->date=Carbon::now();
                                $profits->end_date=$xndate;
                                $profits->profit=0;
                                $profits->status=1;
                                $profits->save();
                                if($set->email_notify==1){
                                    send_email($user->email, $user->site_name, 'Plan was renewed', $xpro->trx.' has been renewed. Thanks for choosing us.');
                                }
                            }else{
                                if($set->email_notify==1){
                                    send_email($user->email, $user->site_name, 'Plan could not be renewed', $xpro->trx.' could not be renewed because of insufficient fund. Thanks for choosing us.');
                                }
                            }
                        }
                    }
                }
            }   
            //Savings
                $save=Savings::wherestatus(0)->get();
                $set=Settings::first();
                foreach($save as $val){
                    if(Carbon::create($val->end_date)->lessThanOrEqualTo(Carbon::now())){
                        $user=User::whereid($save->user_id)->first();
                        $user->balance=$user->balance+$val->profit;
                        $user->save();
                        $val->status=1;
                        $val->save();   
                        if($set->email_notify==1){
                            send_email(
                                $user->email, 
                                $user->username, 
                                'Savings is now available', 
                                'Savings of '.$val->profit.$user->coin->bb->name.'. is now available in your account.<br>Thanks for working with us.'
                            );
                        }                 
                    } 
                }
            //
            if(url()->current()!=route('ipn.flutter')){
                //sub_check();
            }
            $pdeposit=Deposits::where('status', 0)->get();
            $pbank=Banktransfer::where('status', 0)->get();
            $pwithdraw=Withdraw::where('status', 0)->get();
            $view->with('pwithdraw', $pwithdraw );
            $view->with('pdeposit', $pdeposit );
            $view->with('pbank', $pbank );
            $view->with('currency', $currency );
        });
        $data['set']=Settings::first();
        $data['blog']=Blog::whereStatus(1)->get();
        $data['logo']=Logo::first();
        $data['social']=Social::all();
        $data['faq']=Faq::all();
        $data['cat']=Category::all();
        $data['pages']=Page::whereStatus(1)->get();
        $data['ui']=Design::first();
        $data['about']=About::first();
        $data['trending'] = Blog::whereStatus(1)->orderBy('views', 'DESC')->limit(5)->get();
        $data['posts'] = Blog::whereStatus(1)->orderBy('views', 'DESC')->limit(5)->get();
        $data['currency']=Currency::whereStatus(1)->first();
        $data['review'] = Review::whereStatus(1)->get();
        $data['reviewlogin'] = Review::whereStatus(1)->latest()->limit(3)->get();
        $data['team'] = Team::whereStatus(1)->get();
        $data['service'] = Services::all();
        $data['gateway'] = Gateway::whereStatus(1)->get();
        $data['plan'] = Plans::whereStatus(1)->orderby('min_deposit', 'asc')->get();
        $data['xplan'] = Plans::whereStatus(1)->get();

        
        view::share($data);
    }
}
