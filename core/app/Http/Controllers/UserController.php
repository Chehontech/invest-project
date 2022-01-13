<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Settings;
use App\Models\Currency;
use App\Models\Plans;
use App\Models\Gateway;
use App\Models\Deposits;
use App\Models\Withdraw;
use App\Models\Withdrawm;
use App\Models\Profits;
use App\Models\Ticket;
use App\Models\Reply;
use App\Models\Earning;
use App\Models\Transfer;
use App\Models\Adminbank;
use App\Models\Banktransfer;
use App\Models\Bank;
use App\Models\Coupon;
use App\Models\Audit;
use App\Models\Claimed;
use App\Models\Devices;
use App\Models\Sandplanupdate;
use App\Models\Sandprofits;
use App\Models\Statusimage;
use App\Models\Sandplans;
use App\Models\Sandfollowed;
use App\Models\Savings;
use Carbon\Carbon;
use Session;
use Image;
use Redirect;
use App\Models\Sandplancategory;
use Mews\Purifier\Facades\Purifier;



class UserController extends Controller
{        
   
//Support ticket
    public function ticket()
    {
        $data['title']='Disputes';
        $data['ticket']=Ticket::whereUser_id(Auth::guard('user')->user()->id)->paginate(4);
        $data['category']=Sandplancategory::wherestatus(1)->get();
        return view('user.support.index', $data);
    } 
    public function Replyticket($id)
    {
        $data['ticket']=$ticket=Ticket::whereticket_id($id)->first();
        $data['title']='#'.$ticket->ticket_id;
        $data['reply']=Reply::whereTicket_id($ticket->ticket_id)->get();
        return view('user.support.reply', $data);
    }  
    public function Destroyticket($id)
    {
        $audit['user_id']=Auth::guard('user')->user()->id;
        $audit['trx']=str_random(16);
        $audit['log']='Deleted Ticket #'.$id;
        Audit::create($audit);
        $data = Ticket::findOrFail($id);
        $res =  $data->delete();
        if ($res) {
            return back()->with('success', 'Request was Successfully deleted!');
        } else {
            return back()->with('alert', 'Problem With Deleting Request');
        }
    } 
    public function submitticket(Request $request)
    {
        $set=Settings::first();
        $user=$data['user']=User::find(Auth::guard('user')->user()->id);
        $sav['user_id']=Auth::guard('user')->user()->id;
        $sav['subject']=$request->subject;
        $sav['priority']=$request->category;
        $sav['message']=$request->details;
        $sav['ticket_id']=$token=str_random(16);
        $sav['status']=0;
        Ticket::create($sav);
        $audit['user_id']=Auth::guard('user')->user()->id;
        $audit['trx']=str_random(16);
        $audit['log']='Created Ticket #'.$token;
        Audit::create($audit);
        if($set['email_notify']==1){
        send_email($user->email, $user->username, 'New Ticket:'. $token, "Thank you for contacting us, we will get back to you shortly");
        send_email($set->email, $set->site_name, 'New Ticket:'. $token, "New ticket request");
        }
        return back()->with('success', 'Ticket Submitted Successfully.');
    }
    public function submitticketPlan(Request $request)
    {
        $set=Settings::first();
        $dt = Carbon::create($request->start_date);
        $dt->add($request->duration.' '.$request->period)->toDateString();   
        $user=$data['user']=User::find(Auth::guard('user')->user()->id);
        $sav['user_id']=Auth::guard('user')->user()->id;
        $sav['subject']=$request->subject;
        $sav['priority']='create';
        $sav['message']=$request->details;
        $sav['ticket_id']=$token=str_random(16);
        $sav['status']=0;

        $sav['name'] = $request->name;
        $sav['slug'] = Str::slug($request->name, '-');
        $sav['description'] = Purifier::clean($request->description);
        $sav['start_date'] = Carbon::create($request->start_date)->toDateString();
        $sav['price'] = $request->price;
        $sav['duration'] = $request->duration;
        $sav['period'] = $request->period;
        $sav['units'] = $request->units;
        $sav['original'] = $request->units;
        $sav['interest'] = $request->interest;
        $sav['cat_id'] = $request->category;
        $sav['location'] = $request->location;
        $sav['ref_percent'] = $request->ref_percent;
        
        $sav['name_campaign'] = $request->name_campaign;
        $sav['description_campaign'] = Purifier::clean($request->description_campaign);
        $sav['url_campaign'] = $request->url_campaign;
        $sav['video_sand'] = $request->video_sand;

        if($request->hasFile('imageCampaign')){
            $image = $request->file('imageCampaign');
            $filename = 'plan_'.time().'.'.$image->extension();
            $location = 'asset/images/' . $filename;
            Image::make($image)->save($location);
            $sav['image_campaign'] = $filename;
        }

        if($request->hasFile('customFile_pdf')){
            $files = $request->file('customFile_pdf');
            $filename = 'plan_'.time().'.pdf';
            $location = 'asset/images/files/';
            Storage::disk('public')->put($filename, $files);
            $sav['file_pdf'] = $filename;
        }

        if($request->hasFile('customFile_analyse')){
            $files = $request->file('customFile_analyse');
            $filename = 'plan_'.time().'.pdf';
            $location = 'asset/images/files/' . $filename;
            Storage::disk('public')->put($filename, $files);
            $sav['file_analyse'] = $filename;
        }

        if($request->hasFile('customFile_statut')){
            $files = $request->file('customFile_statut');
            $filename = 'plan_'.time().'.pdf';
            $location = 'asset/images/files/' . $filename;
            Storage::disk('public')->put($filename, $files);
            $sav['file_statut'] = $filename;
        }

        if($request->hasFile('customFile_presentation')){
            $files = $request->file('customFile_presentation');
            $filename = 'plan_'.time().'.pdf';
            $location = 'asset/images/files/' . $filename;
            Storage::disk('public')->put($filename, $files);
            $sav['file_presentation'] = $filename;
        }
        

        $sav['expiring_date'] = $dt;
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = 'plan_'.time().'.jpg';
            $location = 'asset/images/' . $filename;
            Image::make($image)->resize(500,280)->save($location);
            $sav['image'] = $filename;
        }

        Ticket::create($sav);
        $audit['user_id']=Auth::guard('user')->user()->id;
        $audit['trx']=str_random(16);
        $audit['log']='Created Ticket #'.$token;
        Audit::create($audit);
        if($set['email_notify']==1){
        send_email($user->email, $user->username, 'New Ticket:'. $token, "Thank you for contacting us, we will get back to you shortly");
        send_email($set->email, $set->site_name, 'New Ticket:'. $token, "New ticket request");
        }
        return back()->with('success', 'Ticket Submitted Successfully.');
    }     
    public function submitreply(Request $request)
    {
        $set=Settings::first();
        $sav['reply']=$request->details;
        $sav['ticket_id']=$request->id;
        $sav['status']=1;
        Reply::create($sav);
        $audit['user_id']=Auth::guard('user')->user()->id;
        $audit['trx']=str_random(16);
        $audit['log']='Replied Ticket #'.$request->id;
        Audit::create($audit);
        if($set['email_notify']==1){
        send_email($set->email, $set->site_name, 'Ticket Reply:'. $request->id, "New ticket reply request");
        }
        $data=Ticket::whereTicket_id($request->id)->first();
        $data->status=0;
        $data->save();
        return back()->with('success', 'Message sent!.');
    }   
//End Support ticket

//Fund account 
    public function fund()
    {
        $data['title']='Fund account';
        $data['adminbank']=Adminbank::whereId(1)->first();
        $data['gateways']=Gateway::whereStatus(1)->orderBy('id', 'DESC')->get();
        $data['deposits']=Deposits::whereUser_id(Auth::guard('user')->user()->id)->latest()->get();
        $data['bank_transfer']=Banktransfer::whereUser_id(Auth::guard('user')->user()->id)->orderBy('id', 'DESC')->get();
        return view('user.fund.index', $data);
    }
        
    public function bank_transfer()
    {
        $data['title']='Bank transfer';
        $data['bank']=Adminbank::whereId(1)->first();
        return view('user.fund.bank', $data);
    }

    public function bank_transfersubmit(Request $request)
    {
        $user=$data['user']=User::find(Auth::guard('user')->user()->id);
        $currency=Currency::whereStatus(1)->first();
        $set=Settings::first();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . $user->username . '.jpg';
            $location = 'asset/screenshot/' . $filename;
            Image::make($image)->resize(800, 800)->save($location);
            $sav['user_id']=Auth::guard('user')->user()->id;
            $sav['amount']=$request->amount;
            $sav['details']=$request->details;
            $sav['image']=$filename;
            $sav['status'] = 0;
            $sav['trx']=$trx=str_random(16);
            Banktransfer::create($sav);
            $audit['user_id']=Auth::guard('user')->user()->id;
            $audit['trx']=str_random(16);
            $audit['log']='Created Bank Transfer Request of'.$request->amount.$currency->name;
            Audit::create($audit);
            if($set['email_notify']==1){
            send_email($user->email,$user->username,'Deposit request under review','We are currently reviewing your deposit of '.$request->amount.$currency->name.', once confirmed your balance will be credited automatically.<br>Thanks for working with us.');    			
            send_email($set->email,$set->site_name,'New bank deposit request','Hello admin, you have a new bank deposit request for '.$trx);
            }
            return redirect()->route('user.fund')->with('success', 'Deposit request under review');
        }else{
            return back()->with('warning', 'An error occured, please try again later');
        }
    } 
    public function fundsubmit(Request $request)
    {
        $currency=Currency::whereStatus(1)->first();
        $gate=Gateway::where('id', $request->gateway)->first();
        $user=User::find(Auth::guard('user')->user()->id);
        $set=Settings::first();
        $token=str_random(16);
        if ($gate->minamo <= $request->amount && $gate->maxamo >= $request->amount) {
            $charge = $request->amount*$gate->charge/100;
            $trx = round(microtime(true));
            $depo['user_id'] = Auth::id();
            $depo['gateway_id'] = $gate->id;
            $depo['amount'] = $request->amount + $charge;
            $depo['charge'] = $charge;
            $depo['btc_amo'] = 0;
            $depo['btc_wallet'] = "";
            $depo['trx'] = $token;
            $depo['secret'] = str_random(8);
            $depo['try'] = 0;
            $depo['status'] = 0;
            Deposits::create($depo);
            $audit['user_id']=Auth::guard('user')->user()->id;
            $audit['trx']=str_random(16);
            $audit['log']='Created Funding Request of '.$request->amount.$currency->name.' via '.$gate->name;
            Audit::create($audit);
            if($request->gateway==507){
                $data = Deposits::where('trx', $token)->orderBy('id', 'DESC')->first();
                $curl = curl_init();
                $postFilds=array(
                    'name'=> $set->site_name,
                    'description'=> $set->site_name.' Account Funding',
                    'pricing_type'=>'fixed_price',
                    'metadata'=>array('customer_id'=>Auth::guard('user')->user()->id, 'customer_name'=> Auth::guard('user')->user()->first_name.' '.Auth::guard('user')->user()->last_name),
                    'local_price'=>array('amount'=>$data->amount, 'currency'=>$currency->name),
                    'redirect_url'=> route('ipn.coinbase'),
                    'cancel_url'=> route('user.fund')
                );
                $postFilds=urldecode(http_build_query($postFilds));
                curl_setopt_array($curl, 
                    array(
                        CURLOPT_URL => "https://api.commerce.coinbase.com/charges",
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => "",
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 30,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => "POST",
                        CURLOPT_POSTFIELDS => $postFilds,
                        CURLOPT_HTTPHEADER => array(
                            "X-CC-Api-Key: ".$gate->val1,
                            "X-CC-Version: 2018-03-22",
                            "content-type: multipart/form-data"
                        ),
                    )
                );
                $response = curl_exec($curl);
                $err = curl_error($curl);
                curl_close($curl);
                $result=json_decode($response);
                $data->secret=$result->data->code;
                Session::put('Track', $result->data->code);
                $data->save();
                return Redirect::away($result->data->hosted_url);
            }
            Session::put('Track', $depo['trx']);
            return redirect()->route('osit.confirm');        
        } else {
            return back()->with('alert', 'Please Follow Deposit Limit');
        }
    }
    
    public function depositpreview()
    {
        $track = Session::get('Track');
        $data['title']='Deposit Preview';
        $data['gate'] = Deposits::where('status', 0)->where('trx', $track)->first();
        return view('user.fund.preview', $data);
    } 
//End of Fund Account
   
//Withdrawal
    public function withdraw()
    {
        $data['title']='Withdraw';
        $data['method']=Withdrawm::whereStatus(1)->get();
        $data['withdraw']=Withdraw::whereUser_id(Auth::guard('user')->user()->id)->orderBy('id', 'DESC')->paginate(4);
        $data['received']=Withdraw::whereStatus(1)->whereuser_id(Auth::guard('user')->user()->id)->sum('amount');
        $data['pending']=Withdraw::whereStatus(0)->whereuser_id(Auth::guard('user')->user()->id)->sum('amount');
        $data['total']=Withdraw::whereuser_id(Auth::guard('user')->user()->id)->sum('amount');
        return view('user.profile.withdraw', $data);
    }   
    public function withdrawupdate(Request $request)
    {
        $withdraw=Withdraw::whereId($request->withdraw_id)->first();
        $withdraw->coin_id=$request->coin;
        $withdraw->details=$request->details;
        $withdraw->save();
        $audit['user_id']=Auth::guard('user')->user()->id;
        $audit['trx']=str_random(16);
        $audit['log']='Updated withdraw request'.$withdraw->reference;
        Audit::create($audit);
        return back()->with('success', 'Successfully updated');
    } 
    public function withdrawsubmit(Request $request)
    {
        $set=$data['set']=Settings::first();
        $user=$data['user']=User::find(Auth::guard('user')->user()->id);
        $currency=Currency::whereStatus(1)->first();
        $amount=$request->amount;
        $token='STL-'.str_random(6);
        if($request->type==1){
            if($user->profit>$amount || $user->profit==$amount){
                $sav['user_id']=Auth::guard('user')->user()->id;
                $sav['amount']=$amount-($request->amount*$request->charge/100);
                $sav['charge']=$request->amount*$set->withdraw_charge/100;
                $sav['status']=0;
                $sav['details']=$request->details;
                $sav['type']=$request->type;
                $sav['coin_id']=$request->coin;
                $sav['reference']=$token;
                if($set->ns==1){
                    $sav['next_settlement']=$set->next_settlement;
                }
                Withdraw::create($sav);
                $audit['user_id']=Auth::guard('user')->user()->id;
                $audit['trx']=str_random(16);
                $audit['log']='Submitted withdraw request'.$token;
                Audit::create($audit);
                $user->profit=$user->profit-$request->amount;
                $user->save();
                if($set['email_notify']==1){
                    send_email(
                        $user->email, 
                        $user->username, 
                        'Withdraw Request currently being Processed', 
                        'We are currently reviewing your withdrawal request of '.$request->amount.$currency->name.'.<br>Thanks for working with us.'
                    );
                    send_email(
                        $set->email, 
                        $set->site_name, 
                        'New Withdraw Request', 
                        'You currently have a new withdrawal request of '.$currency->symbol.$request->amount.'.<br>#'.$token.''
                    );
                }
                return back()->with('success', 'Withdrawal request has been submitted, you will be updated shortly.');
            }else{
                return back()->with('alert', 'Insufficent balance.');
            }
        }elseif($request->type==2){
            if($user->balance>$amount || $user->balance==$amount){
                $sav['user_id']=Auth::guard('user')->user()->id;
                $sav['amount']=$amount-($request->amount*$request->charge/100);
                $sav['charge']=$request->amount*$set->withdraw_charge/100;
                $sav['status']=0;
                $sav['details']=$request->details;
                $sav['type']=$request->type;
                $sav['coin_id']=$request->coin;
                $sav['reference']=$token;
                $sav['next_settlement']=$set->next_settlement;
                Withdraw::create($sav);
                $audit['user_id']=Auth::guard('user')->user()->id;
                $audit['trx']=str_random(16);
                $audit['log']='Submitted withdraw request'.$token;
                Audit::create($audit);
                $user->balance=$user->balance-($request->amount);
                $user->save();
                if($set['email_notify']==1){
                send_email(
                    $user->email, 
                    $user->username, 
                    'Withdraw Request currently being Processed', 
                    'We are currently reviewing your withdrawal request of '.$request->amount.$currency->name.'.<br>Thanks for working with us.'
                );
                send_email(
                    $set->email, 
                    $set->site_name, 
                    'New Withdraw Request', 
                    'You currently have a new withdrawal request of '.$currency->symbol.$request->amount.'.<br>#'.$token.''
                );
                }
                return back()->with('success', 'Withdrawal request has been submitted, you will be updated shortly.');
            }else{
                return back()->with('alert', 'Insufficent balance.');
            }
        }elseif($request->type==3){
            if($user->ref_bonus>$amount || $user->ref_bonus==$amount){
                $sav['user_id']=Auth::guard('user')->user()->id;
                $sav['amount']=$amount-($request->amount*$request->charge/100);
                $sav['charge']=$request->amount*$set->withdraw_charge/100;
                $sav['status']=0;
                $sav['details']=$request->details;
                $sav['type']=$request->type;
                $sav['coin_id']=$request->coin;
                $sav['reference']=$token;
                $sav['next_settlement']=$set->next_settlement;
                Withdraw::create($sav);
                $audit['user_id']=Auth::guard('user')->user()->id;
                $audit['trx']=str_random(16);
                $audit['log']='Submitted withdraw request'.$token;
                Audit::create($audit);
                $user->ref_bonus=$user->ref_bonus-($request->amount);
                $user->save();
                if($set['email_notify']==1){
                send_email(
                    $user->email, 
                    $user->username, 
                    'Withdraw Request currently being Processed', 
                    'We are currently reviewing your withdrawal request of '.$request->amount.$currency->name.'.<br>Thanks for working with us.'
                );
                send_email(
                    $set->email, 
                    $set->site_name, 
                    'New Withdraw Request', 
                    'You currently have a new withdrawal request of '.$currency->symbol.$request->amount.'.<br>#'.$token.''
                );
                }
                return back()->with('success', 'Withdrawal request has been submitted, you will be updated shortly.');
            }else{
                return back()->with('alert', 'Insufficent balance.');
            }
        }
    }  
//End of Withdrawaal

//Transfer
    public function submitownbank(Request $request)
    {
        $set=Settings::first();
        if($set->transfer==1){
            $currency=Currency::whereStatus(1)->first();
            $amountx=$request->amount+($request->amount*$set->transfer_charge/100);
            $user=$data['user']=User::find(Auth::guard('user')->user()->id);
            if($user->email!=$request->email){
                    if($user->balance>$amountx || $user->balance==$amountx){
                        Session::put('Amount', $request->amount);
                        Session::put('Acctemail', $request->email);
                        $audit['user_id']=Auth::guard('user')->user()->id;
                        $audit['trx']=str_random(16);
                        $audit['log']='Started Transfer request';
                        Audit::create($audit);
                        return redirect()->route('user.localpreview'); 
                    }else{
                        return back()->with('alert', 'Account balance is insufficient');
                    }
            }else{
                return back()->with('alert', 'You cant transfer money to the same account.');
            }
        }else{
            return back()->with('alert', 'Transfer Money service is not currently available');
        }
    } 
    public function submitlocalpreview(Request $request)
    {
        $set=Settings::first();
        $currency=Currency::whereStatus(1)->first();
        $amountx=$request->amount+($request->amount*$set->transfer_charge/100);
        $user=$data['user']=User::find(Auth::guard('user')->user()->id);
        $check=User::whereEmail($request->email)->get();
        $user->balance=$user->balance-$amountx;
        $user->save();
        $token=str_random(16);
        if(count($check)>0){
            $trans=User::whereEmail($request->email)->first();
            $sav['ref_id']=$token;
            $sav['amount']=$request->amount;
            $sav['charge']=($request->amount*$set->transfer_charge/100);
            $sav['sender_id']=Auth::guard('user')->user()->id;
            $sav['receiver_id']=$trans->id;        
            $sav['status']=1;   
            Transfer::create($sav);   
            $audit['user_id']=Auth::guard('user')->user()->id;
            $audit['trx']=str_random(16);
            $audit['log']='Transfered '.$currency->symbol.$request->amount.' to '.$request->email;
            Audit::create($audit);  
            $trans->balance=$trans->balance+$request->amount;
            $trans->save(); 
            $contentx='Email:'.$trans->email.', Date:'.Carbon::now().', CR Amt:'.$request->amount.',
            Bal:'.$trans->balance.', Ref:'.$token.', Desc: Transfer';  
            $content='Email:'.$user->email.', Date:'.Carbon::now().', DR Amt:'.$request->amount.',
            Bal:'.$user->balance.', Ref:'.$token.', Desc: Transfer'; 
            if($set['email_notify']==1){
            send_email($trans->email, $trans->username, 'Credit alert', $contentx);
            send_email($user->email, $user->username, 'Debit alert', $content);
            }
            return redirect()->route('user.ownbank')->with('success', 'Transfer was successful');
        }else{
            $sav['ref_id']=$token;
            $sav['amount']=$request->amount-($request->amount*$set->transfer_charge/100);
            $sav['charge']=($request->amount*$set->transfer_charge/100);
            $sav['sender_id']=Auth::guard('user')->user()->id;  
            $sav['temp']=$request->email;  
            $sav['status']=0; 
            Transfer::create($sav); 
            $audit['user_id']=Auth::guard('user')->user()->id;
            $audit['trx']=str_random(16);
            $audit['log']='Transfered '.$currency->symbol.$request->amount.' to '.$request->email;
            Audit::create($audit);    
            $content='Email:'.$user->email.', Date:'.Carbon::now().', DR Amt:'.$request->amount.',
            Bal:'.$user->balance.', Ref:'.$token.', Desc: Transfer'; 
            if($set['email_notify']==1){
            send_email($request->email, $set->full_name, 'Confirm transaction'.$token, 'You are receiving this email because a user of '.$set->site_name.', sent '.$currency->symbol.$request->amount.' to this email, but no account was found with this email, click button link to register with this email and confirm transaction, <a href="'.url('/').'/register">Register</a>');
            send_email($user->email, $user->username, 'Debit alert', $content);
            }
            return redirect()->route('user.ownbank')->with('success', 'Transfer was successful, but user has to create account to confirm transaction');
        }
    }     
    public function Receivedpay($id)
    {
        $set=Settings::first();
        $currency=Currency::whereStatus(1)->first();
        $trans=Transfer::where('Receiver_id', Auth::guard('user')->user()->id)->orWhere('Temp', Auth::guard('user')->user()->email)->first();
        $user=$data['user']=User::where('id', $trans->receiver_id)->orWhere('email', $trans->temp)->first();
        $sender=User::where('id', $trans->sender_id)->first();
        $trans->status=1;
        $trans->save();
        $user->balance=$user->balance+$trans->amount;
        $user->save();
        $audit['user_id']=Auth::guard('user')->user()->id;
        $audit['trx']=str_random(16);
        $audit['log']='Received '.$currency->symbol.$trans->amount.' from '.$sender->email;
        Audit::create($audit);  
        return redirect()->route('user.ownbank')->with('success', 'Transfer was successful');
    }
    public function localpreview()
    {
        $data['amount'] = Session::get('Amount');
        $data['email'] = Session::get('Acctemail');
        $data['title']='Transfer Preview';
        return view('user.transfer.preview', $data);
    } 
    public function ownbank()
    {
        $set=Settings::first();
        if($set->transfer==1){
            $data['title'] = "Send Money";
            $data['transfer']=Transfer::whereSender_id(Auth::guard('user')->user()->id)->latest()->paginate(4);
            $data['received']=Transfer::where('Receiver_id', Auth::guard('user')->user()->id)->orWhere('Temp', Auth::guard('user')->user()->email)->latest()->get();
            $data['sent']=Transfer::whereStatus(1)->whereSender_id(Auth::guard('user')->user()->id)->sum('amount');
            $data['pending']=Transfer::whereStatus(0)->wheresender_id(Auth::guard('user')->user()->id)->sum('amount');
            $data['rebursed']=Transfer::whereStatus(2)->wheresender_id(Auth::guard('user')->user()->id)->sum('amount');
            $data['total']=Transfer::wheresender_id(Auth::guard('user')->user()->id)->sum('amount');
            return view('user.transfer.index', $data);
        }else{
            return back()->with('alert', 'Transfer Money service is not currently available');
        }
    }
//End of Transfer

//Verification Code
    public function transfererror()
    {    
        $data['title']='Error Message';
        return view('auth.error', $data);
    }
    public function upload_kyc(Request $request)
    {
        $user = User::findOrFail(Auth::guard('user')->user()->id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $user->username.time().'kyc.'.$image->extension();
            $location = 'asset/profile/' . $filename;
            if ($user->kyc_link!=null) {
                $link = './asset/profile/' . $user->kyc_link;
                if (file_exists($link)) {
                    @unlink($link);
                }
            }
            Image::make($image)->save($location);
            $user->kyc_link=$filename;
            $user->kyc_type=$request->type;
            $user->save();
            $set=Settings::first();
            $audit['user_id']=Auth::guard('user')->user()->id;
            $audit['trx']=str_random(16);
            $audit['log']='Submitted KYC';
            Audit::create($audit);
            if($set['email_notify']==1){
            send_email($set->email, $set->site_name, 'New Kyc Document ', $user->username.' just uploaded a kyc document, please check it out.');
            }
            return back()->with('success', 'Kyc document was uploaded successful.');
        }else{
            return back()->with('success', 'An error occured, try again.');
        }
    }
    public function authCheck()
    {
        if (Auth::guard('user')->user()->email_verify==1) {
            return redirect()->route('user.dashboard');
        } else {
            $data['title'] = "Email verification";
            return view('user.security.verify', $data);
        }
    }    
    public function blocked()
    {
        if (Auth::guard('user')->user()->status==0) {
            return redirect()->route('user.dashboard');
        } else {
            $data['title'] = "Account suspended";
            return view('user.security.blocked', $data);
        }
    }    
    public function no_kyc()
    {
        if (Auth::guard('user')->user()->kyc_status==1) {
            return redirect()->route('user.dashboard');
        } else {
            $data['title'] = "Know your customer";
            return view('user.security.no-kyc', $data);
        }
    }    
    public function check_kyc()
    {
        $data['title'] = "Know your customer";
        return view('user.security.no-kyc', $data);
    }
    public function sendEmailVcode(Request $request)
    {
        $user = User::find(Auth::guard('user')->user()->id);
        $set=Settings::first();
        if (Carbon::parse($user->email_time)->addMinutes(1) > Carbon::now()) {
            $time = Carbon::parse($user->email_time)->addMinutes(1);
            $delay = $time->diffInSeconds(Carbon::now());
            $delay = gmdate('i:s', $delay);
            session()->flash('alert', 'You can resend Verification Code after ' . $delay . ' minutes');
        } else {
            $code = strtoupper(Str::random(6));
            $user->email_time = Carbon::now();
            $user->verification_code = $code;
            $user->save();
            if($set['email_notify']==1){
            send_email($user->email, $user->username, 'Verification Code', 'Your Verification Code is ' . $code);
            }
            session()->flash('success', 'Verification Code Send successfully');
        }
        return back();
    }
    public function postEmailVerify(Request $request)
    {

        $user = User::find(Auth::guard('user')->user()->id);
        if ($user->verification_code == $request->email_code) {
            $user->email_verify = 1;
            $user->save();
            session()->flash('success', 'Your Profile has been verfied successfully');
            return redirect()->route('user.dashboard');
        } else {
            session()->flash('alert', 'Verification Code Did not matched');
        }
        return back();
    } 
//End Verification Code

//Bank functions 
    public function bank()
    {
        $data['title']='Manage bank accounts';
        $data['bank']=Bank::whereUser_id(Auth::guard('user')->user()->id)->orderBy('id', 'DESC')->get();
        return view('user.bank.index', $data);
    }
    public function Destroybank($id)
    {
        $data = Bank::findOrFail($id);
        $res =  $data->delete();
        if ($res) {
            return back()->with('success', 'Bank account was Successfully deleted!');
        } else {
            return back()->with('alert', 'Problem With Deleting Request');
        }
    } 
    public function Updatebank(Request $request)
    {
        $bank=Bank::whereId($request->id)->first();
        $bank->name=$request->name;
        $bank->iban=$request->iban;
        $bank->swift=$request->swift;
        $bank->acct_no=$request->acct_no;
        $bank->acct_name=$request->acct_name;
        $bank->save();
        return back()->with('success', 'Bank details was successfully updated');
    }
    public function Createbank(Request $request)
    {
        $data['name']=$request->name;
        $data['iban']=$request->iban;
        $data['swift']=$request->swift;
        $data['acct_no']=$request->acct_no;
        $data['acct_name']=$request->acct_name;
        $data['user_id']=Auth::guard('user')->user()->id;
        Bank::create($data);
        return back()->with('success', 'Bank account was successfully added.');
    } 
//End of bank functions

//Settings
    public function delaccount(Request $request)
    {

        $set=Settings::first();
        $id = Auth::guard('user')->user()->id;
        $user = User::whereId($id)->delete();
        $transfer = Transfer::where('Receiver_id', $id)->orWhere('Temp', Auth::guard('user')->user()->email)->delete();
        $bank_transfer = Banktransfer::whereUser_id($id)->delete();
        $deposit = Deposits::whereUser_id($id)->delete();
        $ticket = Ticket::whereUser_id($id)->delete();
        $withdraw = Withdraw::whereUser_id($id)->delete();
        $profit = Profits::whereUser_id($id)->delete();
        $savings = Savings::whereUser_id($id)->delete();
        Auth::guard('user')->logout();
        if($set['email_notify']==1){
        send_email($set->email, $set->site_name, 'A user just left '.$set->site_name, 'Reason:' .$request->reason);
        }
        session()->forget('fakey');
        return redirect()->route('login')->with('success', 'Account was successfully deleted');
    }
    public function avatar(Request $request)
    {
        $user = User::findOrFail(Auth::guard('user')->user()->id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $user->username.time().'profile.'.$image->extension();
            $location = 'asset/profile/' . $filename;
            if ($user->image != 'personx.jpg') {
                $path = './asset/profile/';
                File::delete($path.$user->image);
            }
            $img=Image::make($image);
            $img->resize(70, 70);
            $img->save($location);
            $user->image=$filename;
            $user->save();
            $audit['user_id']=Auth::guard('user')->user()->id;
            $audit['trx']=str_random(16);
            $audit['log']='Changed account photo';
            Audit::create($audit);
            return back()->with('success', 'Avatar Updated Successfully.');
        }else{
            return back()->with('success', 'An error occured, try again.');
        }
    }       
    public function kyc(Request $request)
    {
        $user = User::findOrFail(Auth::guard('user')->user()->id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $user->username.time().'kyc.'.$image->extension();
            $location = 'asset/profile/' . $filename;
            if ($user->image != 'user-default.png') {
                $path = './asset/profile/';
                $link = $path . $user->kyc_link;
                if (file_exists($link)) {
                    @unlink($link);
                }
            }
            Image::make($image)->save($location);
            $user->kyc_link=$filename;
            $user->save();
            $set=Settings::first();
            $audit['user_id']=Auth::guard('user')->user()->id;
            $audit['trx']=str_random(16);
            $audit['log']='Submitted KYC';
            Audit::create($audit);
            if($set['email_notify']==1){
            send_email($set->email, $set->site_name, 'New Kyc Document ', $user->username.' just uploaded a kyc document, please check it out.');
            }
            return back()->with('success', 'Kyc document Upload was successful.');
        }else{
            return back()->with('success', 'An error occured, try again.');
        }
    }
    public function account(Request $request)
    {
        $user = User::findOrFail(Auth::guard('user')->user()->id);
        $user->first_name=$request->first_name;
        $user->last_name=$request->last_name;
        $user->address=$request->address;
        $user->phone=$request->phone;
        $user->username=$request->username;
        $user->save();
        $audit['user_id']=Auth::guard('user')->user()->id;
        $audit['trx']=str_random(16);
        $audit['log']='Updated account details';
        Audit::create($audit);     
        if($user->email!=$request->email){
            $check=User::whereEmail($request->email)->get();
            if(count($check)<1){
                $user->email_verify=0;
                $user->email=$request->email;
                $user->save();
            }else{
                return back()->with('alert', 'Email already in use.');
            }
        }
        return back()->with('success', 'Profile Updated Successfully.');
    } 
    public function profile()
    {
        $data['title'] = "Account Settings";
        $set=Settings::first();
        $user = User::find(Auth::guard('user')->user()->id);
        $site=$set->site_name;
        return view('user.profile.index', $data);
    }
    
    public function submitPassword(Request $request)
    {
        $user = User::whereid(Auth::guard('user')->user()->id)->first();
        if (Hash::check($request->password, $user->password)) {
            $user->password = Hash::make($request->new_password);
            $user->save();
            $audit['user_id']=Auth::guard('user')->user()->id;
            $audit['trx']=str_random(16);
            $audit['log']='Changed Password';
            Audit::create($audit);
            return back()->with('success', 'Password Changed successfully.');
        }elseif (!Hash::check($request->password, $user->password)) {
            return back()->with('alert', 'Invalid password');
        }
    }   
    
    public function password()
    {
        $data['title'] = "Password & Devices";
        $data['devices']=Devices::whereuser_id(Auth::guard('user')->user()->id)->get();
        return view('user.security.password', $data);
    } 
//End of Settings

//Referral
    public function referral()
    {
        $data['title']='Referral';
        $data['referral']=User::wherereferral(Auth::guard('user')->user()->id)->get();
        $data['earning']=Earning::whereReferral(Auth::guard('user')->user()->id)->get();
        $data['check']=Earning::whereReferral(Auth::guard('user')->user()->id)->sum('amount');
        $refOne='t';
        $refTwo='s';
        $data['ref']=$refOne;
        $data['sec-ref']=$refTwo;
        $uss=User::find(Auth::guard('user')->user()->id);
        
        if ($uss->referral != null) {
            $idRef=$uss->referral;
            $usRef=$uss->username;
            //$usRef=User::find(Auth::guard('user')->user()->id);
            //$usRefs=User::whereusername($usRef)->count();
            $idRefs=User::whereid($idRef)->first()->username;
            $data['refLink']='invest.adder.com.ua/register/?ref='.$idRefs.'&sec-ref='.$usRef.'';
        } else {
            $usRef=$uss->username;
            $data['refLink']='invest.adder.com.ua/register/?ref='.$usRef.'';
        }
        
        $data['test']=$uss->id;
        return view('user.profile.referral', $data);
    }
//End of Referral

//Dashboard
    public function dashboard()
    {
        $data['title']='Dashboard';
        $data['profit']=Profits::whereUser_id(Auth::guard('user')->user()->id)->orderby('id', 'DESC')->limit(5)->get();
        $trans=Transfer::where('Receiver_id', Auth::guard('user')->user()->id)->orWhere('Temp', Auth::guard('user')->user()->email)->sum('amount');
        $received=Withdraw::whereStatus(1)->whereuser_id(Auth::guard('user')->user()->id)->sum('amount');
        $pending=Withdraw::whereStatus(0)->whereuser_id(Auth::guard('user')->user()->id)->sum('amount');
        $pendingr=Transfer::where('Receiver_id', Auth::guard('user')->user()->id)->orWhere('Temp', Auth::guard('user')->user()->email)->Where('Status', 0)->sum('amount');
        $totalx=Withdraw::whereuser_id(Auth::guard('user')->user()->id)->sum('amount');
        $data['top']=User::wheretrade_share('on')->where('total_profit', '!=', 0)->orderBy('total_profit', 'DESC')->limit(6)->get();
        $data['received']=$trans+$received;
        $data['total']=$totalx+$trans;
        $data['pending']=$pendingr+$pending;
        return view('user.index', $data);
    } 
//End of Dashboard

//Plans
    public function plans()
    {
        $data['title']='Investment Plans';
        $data['plan']=Plans::whereStatus(1)->orderBy('min_deposit', 'DESC')->paginate(3);
        $data['datetime']=Carbon::now();
        return view('user.trading.plans', $data);
    }  
    public function check_plan(Request $request)
    {
        $data['plan']=$plan=Plans::Where('id',$request->plan)->first();
        $data['amount']=$request->amount;
        $audit['user_id']=Auth::guard('user')->user()->id;
        $audit['trx']=str_random(16);
        $audit['log']='Started attempt to purchase '.$plan->name;
        Audit::create($audit);
        if(!empty($request->coupon)){
            Session::put('cup', 'cup');
            $check=Coupon::where('code',$request->coupon)->where('status', 1)->get();
            if(count($check)>0){
                $data['coupon']=Coupon::Where('code',$request->coupon)->first();
            }else{
                $audit['user_id']=Auth::guard('user')->user()->id;
                $audit['trx']=str_random(16);
                $audit['log']='Failed coupon check for coupon code #'.$request->coupon;
                Audit::create($audit);
                return back()->with('alert', 'Invalid coupon code');  

            }
        }
        $data['title']='Plan Preview';
        return view('user.trading.preview', $data);
    }
    public function buy(Request $request)
    {
        $plan=$data['plan']=Plans::Where('id',$request->plan)->first();
        $user=User::find(Auth::guard('user')->user()->id);
        $set=Settings::find(1);
        $currency=Currency::wherestatus(1)->first();
        $date=Carbon::now();
        $date1=date_create(Carbon::now());
        $date2=date_create($date);
        $date_diff=date_diff($date2, $date1);
        $start_date=date_create($date);
        date_add($start_date, date_interval_create_from_date_string($plan->duration.' '.$plan->period));
        $ndate=date_format($start_date, "Y-m-d H:i:s"); 
        if($request->coupon==1){
            $coupon=Coupon::where('code',$request->code)->where('status', 1)->first();
            $main=$request->amount-($request->amount*$coupon->percent/100);
            $min_check=$request->amount;
            $amount_check=$request->amount;
        }else{
            $main=$request->amount;
            $min_check=$request->amount;
            $amount_check=$request->amount;
        }
        if($user->balance>$main || $user->balance==$main){
            if($min_check>$plan->min_deposit || $min_check==$plan->min_deposit){
                if($amount_check<$plan->amount  || $amount_check==$plan->amount){
                    $plan->subscribers=$plan->subscribers+1;
                    $plan->save();
                    $reset=Plans::all();
                    foreach($reset as $xreset){
                        $xreset->popular=0;
                        $xreset->save();
                    }
                    $allplan=Plans::orderby('subscribers', 'DESC')->first();
                    $allplan->popular=1;
                    $allplan->save();
                    $sav['user_id']=Auth::guard('user')->user()->id;
                    $sav['plan_id']=$request->plan;
                    $sav['amount']=$request->amount;
                    $sav['percent']=$plan->percent;
                    $sav['duration']=$plan->duration.' '.$plan->period;
                    $sav['c_bonus']=$plan->bonus;
                    $sav['compound']=$plan->compound;
                    $sav['interest']=$plan->interest;
                    $sav['claim']=$plan->claim;
                    $sav['recurring']=$plan->recurring;
                    $sav['profit']=0;
                    $sav['status']=1;
                    $sav['end_date']=$ndate;
                    $sav['date']=$date;
                    $sav['trx']='INV-'.str_random(6);
                    if($request->coupon==1){
                        $sav['coupon']=1;
                        $sav['c_code']=$coupon->code;
                        $sav['c_percent']=$coupon->percent;
                        $audit['user_id']=Auth::guard('user')->user()->id;
                        $audit['trx']=str_random(16);
                        $audit['log']='Purchased plan #'.$plan->name.' with coupon code #'.$coupon->code;
                        Audit::create($audit);
                    }
                    Profits::create($sav);
                    $audit['user_id']=Auth::guard('user')->user()->id;
                    $audit['trx']=str_random(16);
                    $audit['log']='Purchased plan #'.$plan->name;
                    Audit::create($audit);
                    $a=$user->balance-$main;
                    $user->balance=$a;
                    $user->save();
                    if ($plan->ref_percent!=null){
                        if ($set->referral==1){
                            if(Auth::guard('user')->user()->referral!=null){
                                $ref_amount=($main*$plan->ref_percent)/100;
                                $key=User::whereid(Auth::guard('user')->user()->referral)->first();
                                $user_update=User::whereId($key->id)->first();
                                $user_update->ref_bonus=$user_update->ref_bonus+$ref_amount;
                                $user_update->save();
                                $ref['user_id']=Auth::guard('user')->user()->id;
                                $ref['referral']=$key->id;
                                $ref['plan_id']=$request->plan;
                                $ref['ref_id']=$key->id;
                                $ref['amount']=$ref_amount;
                                Earning::create($ref);
                                $audit['user_id']=$key->id;
                                $audit['trx']=str_random(16);
                                $audit['log']='Received '.$currency->symbol.$ref_amount.' from '.Auth::guard('user')->user()->id;
                                Audit::create($audit);
                                $audit['user_id']=Auth::guard('user')->user()->id;
                                $audit['trx']=str_random(16);
                                $audit['log']='Paid '.$currency->symbol.$ref_amount.' to '.$user_update->username;
                                Audit::create($audit);
                            }
                        }
                    }
                    if($set['email_notify']==1){
                    send_email($user->email, $user->site_name, 'Trade has started', '#'.$plan->trx.' will be updated daily and run for '.$plan->duration.' '.$plan->period.'. Thanks for choosing us.');
                    }
                    return redirect()->route('user.trades')->with('success', 'Plan was successfully purchased.');
                }else{
                    return redirect()->route('user.trades')->with('alert', 'value is greater than maximum deposit');  
                }
            }else{
                return redirect()->route('user.trades')->with('alert', 'value is less than minimum deposit');  
            }
        }else{
            return redirect()->route('user.trades')->with('alert', 'Insufficient Funds, please fund your account');
        }
    }   
//End of Plans

//Activity
    public function trades()
    {
        $data['title']='Activity';
        $data['activity']=Profits::whereUser_id(Auth::guard('user')->user()->id)->orderby('id', 'DESC')->get();
        return view('user.trading.trades', $data);
    }  

    public function cancel_recurring($id)
    {
        $data=Profits::wheretrx($id)->first();
        $data->c_r=0;
        $data->save();
        $audit['user_id']=Auth::guard('user')->user()->id;
        $audit['trx']=str_random(16);
        $audit['log']='Cancelled Recurring payment for #'.$data->trx;
        Audit::create($audit);
        return back()->with('success', 'Recurring plan has been cancelled.');
    } 

    public function start_recurring($id)
    {
        $data=Profits::wheretrx($id)->first();
        $data->c_r=1;
        $data->save();
        $audit['user_id']=Auth::guard('user')->user()->id;
        $audit['trx']=str_random(16);
        $audit['log']='Started Recurring payment for #'.$data->trx;
        Audit::create($audit);
        return back()->with('success', 'Recurring plan has started.');
    }    

    public function claim_profit(Request $request)
    {
        $data=Profits::find($request->activity);
        $user=User::whereid($data->user_id)->first();
        $data->claimed=$request->amount+$data->claimed;
        $data->save();
        $xsav['user_id'] = Auth::guard('user')->user()->id;
        $xsav['profit_id'] = $data->id;
        $xsav['amount'] = $request->amount;
        $xsav['date'] = Carbon::today();
        $xsav['ref']=$token='HIS-'.str_random(6);
        Claimed::create($xsav);
        $user->profit=$user->profit+$request->amount;
        $user->total_profit=$user->total_profit+$request->amount;
        $user->save();
        return back()->with('success', 'Profit has been added to wallet.');
    }
//End of Activity

//Audit
    public function audit()
    {
        $data['title']='Audit Logs';
        $data['audit']=Audit::whereUser_id(Auth::guard('user')->user()->id)->orderBy('created_at', 'DESC')->get();
        return view('user.profile.audit', $data);
    }   
//End of Audit  

//Logout
    public function logout()
    {
        if (Auth::guard('user')->check()) {
        $audit['user_id']=Auth::guard('user')->user()->id;
        $audit['trx']=str_random(16);
        $audit['log']='Logged out - '.user_ip();
        Audit::create($audit);
        Auth::guard('user')->logout();
        return redirect()->route('login')->with('success', 'Just Logged Out!');
        }else{
            return redirect()->route('login')->with('success', 'Just Logged Out!');
        }
    }
//End of Logout

//Upgrade account
    public function upgrade()
    {
        $user=User::where('id', Auth::guard('user')->user()->id)->first();
        $set=Settings::first();
        if($user->balance>$set->upgrade_fee || $user->balance==$set->upgrade_fee){
            $user->upgrade=1;
            $user->balance=$user->balance-$set->upgrade_fee;
            $user->save();  
            return back()->with('success', 'You now have access to investment bonus.');
        }else{
            return back()->with('alert', 'Insufficient balance, add more funds..');
        }
    }
//End of Upgrade 

//2fa Security
    public function fa()
    {
        $data['title']='Two Factor Authentication';
        $g=new \Sonata\GoogleAuthenticator\GoogleAuthenticator();
        $secret=$g->generateSecret();
        $set=Settings::first();
        $user = User::find(Auth::guard('user')->user()->id);
        $site=$set->site_name;
        $data['secret']=$secret;
        $data['image']=\Sonata\GoogleAuthenticator\GoogleQrUrl::generate($user->email, $secret, $site);
        return view('user.security.2fa', $data);
    }
    public function submit2fa(Request $request)
    {
        $user = User::findOrFail(Auth::guard('user')->user()->id);
        $g=new \Sonata\GoogleAuthenticator\GoogleAuthenticator();
        $secret=$request->vv;
        if ($request->type==0) {
            $check=$g->checkcode($user->googlefa_secret, $request->code, 3);
            if($check){
                $user->fa_status = 0;
                $user->googlefa_secret = null;
                $user->save();
                $set=Settings::first();
                $audit['user_id']=Auth::guard('user')->user()->id;
                $audit['trx']=str_random(16);
                $audit['log']='Deactivated 2fa';
                Audit::create($audit);
                if($set['email_notify']==1){
                send_email($user->email, $user->username, 'Two Factor Security Disabled', ' 2FA security on your account was just disabled, contact us immediately if this was not done by you.');
                }
                return back()->with('success', '2fa disabled.');
            }else{
                return back()->with('alert', 'Invalid code.');
            }
        }else{
            $check=$g->checkcode($secret, $request->code, 3);
            if($check){
                $user->fa_status = 1;
                $user->googlefa_secret = $request->vv;
                $user->save();
                Session::put('fakey', $secret);
                $set=Settings::first();
                $audit['user_id']=Auth::guard('user')->user()->id;
                $audit['trx']=str_random(16);
                $audit['log']='Activated 2fa';
                Audit::create($audit);
                if($set['email_notify']==1){
                send_email($user->email, $user->username, 'Two Factor Security Enabled', ' 2FA security on your account was just enabled, contact us immediately if this was not done by you.');
                }
                return back()->with('success', '2fa enabled.');
            }else{
                return back()->with('alert', 'Invalid code.');
            }
        }
    }
//End of Security

//Project
    public function sandtrades()
    {
        $data['title']='Trade History';
        $data['profit']=Sandprofits::whereUser_id(Auth::guard('user')->user()->id)->orderby('id', 'DESC')->get();
        return view('user.trading.sandtrades', $data);
    }  

    public function sandfollowed()
    {
        $data['title']='Followed plans';
        $data['followed']=Sandfollowed::whereUser_id(Auth::guard('user')->user()->id)->orderby('id', 'DESC')->get();
        return view('user.trading.followed', $data);
    }  

    public function sandcheck_plan(Request $request)
    {
        $currency=Currency::whereStatus(1)->first();
        $set=Settings::find(1);
        $plan=Sandplans::whereid($request->plan)->first();
        $dt = Carbon::now();
        $dt->add($plan->duration.' '.$plan->period);
        $amount=$plan->price*$request->units;
        $sav['user_id']=Auth::guard('user')->user()->id;
        $sav['plan_id']=$plan->id;
        $sav['units']=$request->units;
        $sav['amount']=$amount;
        $sav['profit']=$amount+($amount*$plan->interest/100);
        $sav['status']=1;
        $sav['trx']=$token='PRO-'.str_random(6);
        $sav['expiring_date'] = $dt;
        Sandprofits::create($sav);
        $plan->units=$plan->units-$request->units;
        $plan->save();
        $follow=Sandfollowed::whereuser_id(Auth::guard('user')->user()->id)->whereplan_id($plan->id)->get();
        if(count($follow)<1){
            $fol['user_id']=Auth::guard('user')->user()->id;
            $fol['plan_id']=$plan->id;
            Sandfollowed::create($fol); 
        }
        $user=User::find(Auth::guard('user')->user()->id);
        $user->balance = $user->balance-$amount;
        $user->save();
        $audit['user_id']=Auth::guard('user')->user()->id;
        $audit['trx']=$token;
        $audit['log']='Verified Investment of '.$currency->symbol.$amount.' for '.$plan->name;
        if ($plan->ref_percent!=null){
            if ($set->referral==1){
                if(Auth::guard('user')->user()->referral!=null){
                    $ref_amount=($amount*$plan->ref_percent)/100;
                    $key=User::whereid(Auth::guard('user')->user()->referral)->first();
                    $user_update=User::whereId($key->id)->first();
                    $user_update->ref_bonus=$user_update->ref_bonus+$ref_amount;
                    $user_update->save();
                    $ref['user_id']=Auth::guard('user')->user()->id;
                    $ref['referral']=$key->id;
                    $ref['plan_id']=$request->plan;
                    $ref['type']=1;
                    $ref['ref_id']=$key->id;
                    $ref['amount']=$ref_amount;
                    Earning::create($ref);
                    $audit['user_id']=$key->id;
                    $audit['trx']=str_random(16);
                    $audit['log']='Received '.$currency->symbol.$ref_amount.' from '.Auth::guard('user')->user()->id;
                    Audit::create($audit);
                    $audit['user_id']=Auth::guard('user')->user()->id;
                    $audit['trx']=str_random(16);
                    $audit['log']='Paid '.$currency->symbol.$ref_amount.' to '.$user_update->username;
                    Audit::create($audit);
                }
            }
        }
        Audit::create($audit);
        return redirect()->route('user.sandtrades')->with('success', 'Payment was successful!');
    }

    public function sandplans()
    {
        $dt=Carbon::now();
        $data['check']=$dt->toDateTimeLocalString();
        $data['title']='Investment Plans';
        $data['open']=Sandplans::whereStatus(1)->where('start_date', '<=', $dt->toDateTimeLocalString())->where('expiring_date', '>', $dt->toDateTimeLocalString())->orderBy('id', 'DESC')->get();
        $data['coming']=Sandplans::whereStatus(1)->where('start_date', '>', $dt->toDateTimeLocalString())->orderBy('id', 'DESC')->get();
        $data['closed']=Sandplans::whereStatus(1)->where('expiring_date', '<', $dt->toDateTimeLocalString())->orderBy('id', 'DESC')->get();
        return view('user.trading.project-plans', $data);
    }    
    public function Viewsandplan($id)
    {
        $data['plan']=$plan=Sandplans::whereslug($id)->first();
        $data['title']=$plan->name;
        $data['profit']=Sandprofits::whereuser_id(Auth::guard('user')->user()->id)->whereplan_id($plan->id)->get();
        $data['updates']=Sandplanupdate::whereplan_id($plan->id)->get();
        return view('user.trading.view', $data);
    }    
    public function Viewsandplanupdate($id)
    {
        $data['title']='Plan Update';
        $data['updates']=Sandplanupdate::whereid($id)->first();
        $data['images']=Statusimage::whereupdate_id($id)->get();
        $data['first']=Statusimage::whereupdate_id($id)->first();
        return view('user.trading.status', $data);
    } 
    public function Follow($id)
    {
        $plan=Sandplans::whereslug($id)->first();
        $fol['user_id']=Auth::guard('user')->user()->id;
        $fol['plan_id']=$plan->id;
        Sandfollowed::create($fol); 
        return redirect()->route('user.sandfollowed')->with('success', 'You will receive updates on this plan.');
    }    
    
    public function Unfollow($id)
    {
        $data = Sandfollowed::whereplan_id($id)->whereuser_id(Auth::guard('user')->user()->id)->first();
        $res =  $data->delete();
        return back()->with('success', 'Unfollowed.');
    }
//End of Project

//Savings
    public function savings()
    {
        $data['title']='Savings';
        $data['save']=Savings::whereuser_id(Auth::guard('user')->user()->id)->paginate(9);
        return view('user.savings.index', $data);
    }        
    public function newsavings()
    {
        $data['title']='Save Money';
        return view('user.savings.new', $data);
    } 
    public function submitsavings(Request $request)
    {
        $user=User::find(Auth::guard('user')->user()->id);
        $exp = $pieces = explode("*", $request->type);
        $type=$exp[0];
        if($type==1){
            if($user->profit>$request->amount || $user->profit==$request->amount){              
                $user->profit=$user->profit-$request->amount;
                $user->save();
                $exp=explode("*", $request->duration);
                $data= new Savings();
                $data->user_id=$user->id;
                $data->amount=$request->amount;
                $data->profit=($request->amount*trim($exp[1])/100)+$request->amount;
                $data->percent=trim($exp[1]);
                $data->purpose=$request->purpose;
                $data->end_date=Carbon::now()->add(trim($exp[0]).' months');
                $data->duration=trim($exp[0]).' months';
                $data->ref_id='SAV-'.str_random(6);
                $data->save();
                return redirect()->route('user.savings')->with('success', 'Operation was succesful, you won\'t have access to this funds till '.Carbon::now()->add(trim($exp[0]).' months'));             
            }else{
                return redirect()->route('user.savings')->with('warning', 'Insufficient Funds, please fund your account');
            }
        }elseif($type==2){
            if($user->balance>$request->amount || $user->balance==$request->amount){              
                $user->balance=$user->balance-$request->amount;
                $user->save();
                $exp=explode("*", $request->duration);
                $data= new Savings();
                $data->user_id=$user->id;
                $data->amount=$request->amount;
                $data->profit=($request->amount*trim($exp[1])/100)+$request->amount;
                $data->percent=trim($exp[1]);
                $data->purpose=$request->purpose;
                $data->end_date=Carbon::now()->add(trim($exp[0]).' months');
                $data->duration=trim($exp[0]).' months';
                $data->ref_id='SAV-'.str_random(6);
                $data->save();
                return redirect()->route('user.savings')->with('success', 'Operation was succesfully, you wont have access to this funds till '.Carbon::now()->add(trim($exp[0]).' months'));             
            }else{
                return redirect()->route('user.savings')->with('warning', 'Insufficient Funds, please fund your account');
            }
        }elseif($type==3){
            if($user->ref_bonus>$request->amount || $user->ref_bonus==$request->amount){              
                $user->ref_bonus=$user->ref_bonus-$request->amount;
                $user->save();
                $exp=explode("*", $request->duration);
                $data= new Savings();
                $data->user_id=$user->id;
                $data->amount=$request->amount;
                $data->profit=($request->amount*trim($exp[1])/100)+$request->amount;
                $data->percent=trim($exp[1]);
                $data->purpose=$request->purpose;
                $data->end_date=Carbon::now()->add(trim($exp[0]).' months');
                $data->duration=trim($exp[0]).' months';
                $data->ref_id='SAV-'.str_random(6);
                $data->save();
                return redirect()->route('user.savings')->with('success', 'Operation was succesfully, you wont have access to this funds till '.Carbon::now()->add(trim($exp[0]).' months'));             
            }else{
                return redirect()->route('user.savings')->with('warning', 'Insufficient Funds, please fund your account');
            }
        }
    }
//End of Savings
}
