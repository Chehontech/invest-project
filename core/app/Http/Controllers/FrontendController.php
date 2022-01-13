<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use App\Models\Blog;
use App\Models\Faq;
use App\Models\Category;
use App\Models\Page;
use App\Models\Faqcategory;
use App\Models\Review;
use App\Models\User;
use App\Models\Withdraw;
use App\Models\Profits;
use App\Models\Contact;
use App\Models\Sandplans;
use App\Models\Sandprofits;
use App\Models\Sandplanupdate;
use Illuminate\Http\Request;
use App\Models\Aboutimages;
use Carbon\Carbon;

class FrontendController extends Controller
{

    public function __construct()
    {

    }


    public function index()
    {
        $dt=Carbon::now();
        $set=Settings::first();
        $data['title'] = $set->title;

        $t_nprofit=Profits::sum('amount');
        $t_sprofit=Sandprofits::sum('amount');
        $data['t_amount']=$t_nprofit+$t_sprofit; 
        $data['t_profit']=User::sum('total_profit');     
        $data['t_bonus']=User::sum('trade_bonus');     
        $data['t_payout']=Withdraw::wherestatus(1)->sum('amount'); 
        $data['withdraw']=Withdraw::wherestatus(1)->latest()->get();  
        $data['open']=Sandplans::whereStatus(1)->whereDate('start_date', '<=', $dt->toDateString())->whereDate('expiring_date', '>', $dt->toDateString())->orderBy('id', 'DESC')->get();
        $data['coming']=Sandplans::whereStatus(1)->where('start_date', '>', $dt->toDateString())->orderBy('id', 'DESC')->get();
        $data['closed']=Sandplans::whereStatus(1)->where('expiring_date', '<', $dt->toDateTimeLocalString())->orderBy('id', 'DESC')->get();
        return view('front.index', $data);
    }

    public function Checkplan($id)
    {
        $data['plan']=$plan=Sandplans::whereslug($id)->first();
        $data['title']=$plan->name;
        $data['updates']=Profits::whereplan_id($id)->get();
        //$data['updates']=Sandplanupdate::whereplan_id($id)->get();  
        return view('front.view', $data);
    }

    public function about()
    {
        $data['title'] = "About Us";
        $data['review'] = Review::whereStatus(1)->get();
        $data['images']=Aboutimages::orderby('id', 'desc')->get(); 
        $t_nprofit=Profits::sum('amount');
        $t_sprofit=Sandprofits::sum('amount');
        $data['t_amount']=$t_nprofit+$t_sprofit; 
        $data['t_profit']=User::sum('total_profit');     
        $data['t_bonus']=User::sum('trade_bonus');     
        $data['t_payout']=Withdraw::wherestatus(1)->sum('amount'); 
        return view('front.about', $data);
    }

    public function faq()
    {
        $data['title'] = "Faq";
        $data['faq']=Faq::all();
        $data['fcat']=Faqcategory::all();
        return view('front.faq', $data);
    }
    
    public function terms()
    {
        $data['title'] = "Terms & conditions";
        return view('front.terms', $data);
    }    
    
    public function privacy()
    {
        $data['title'] = "Privacy policy";
        return view('front.privacy', $data);
    }


    public function contact()
    {
        $data['title'] = "Contact Us";
        return view('front.contact', $data);
    }    
    
    public function plans()
    {
        $data['title'] = "Investment plans";
        return view('front.plans', $data);
    }


    public function contactSubmit(Request $request)
    {
        $data=new Contact();
        $data->fill($request->all())->save();
        return back()->with('success', ' Message was successfully sent!');
    }


    public function blog()
    {
        $data['title'] = "Blog Feed";
        $data['posts'] = Blog::latest()->paginate(6);
        $data['first'] = Blog::first();
        return view('front.blog', $data);
    }

    public function article($id)
    {
        $post = $data['post'] = Blog::whereslug($id)->first();
        $xcat = $data['xcat'] = Category::find($post->cat_id);
        $post->views += 1;
        $post->save();
        $data['title'] = $data['post']->title;
        return view('front.single', $data);
    }

    public function category($id)
    {
        $cat = Category::find($id);
        $data['title'] = $cat->categories;
        $data['posts'] = Blog::where('cat_id', $id)->latest()->paginate(3);
        return view('front.cat', $data);
    } 
    
    public function page($id)
    {
        $page = $data['page']=Page::whereslug($id)->first();
        $data['title'] = $page->title;
        return view('front.pages', $data);
    }

}
