<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mews\Purifier\Facades\Purifier;
use Validator;
use App\Models\Logo;
use App\Models\Currency;
use App\Models\Social;
use App\Models\About;
use App\Models\Faq;
use App\Models\Faqcategory;
use App\Models\Page;
use App\Models\Review;
use App\Models\Services;
use App\Models\Brands;
use App\Models\Design;
use App\Models\Team;
use App\Models\Aboutimages;
use Image;
use Str;





class WebController extends Controller
{

//Social
    public function sociallinks()
    {
        $data['title']='Social links';
        $data['links'] = Social::latest()->get();
        return view('admin.web-control.social-links', $data);
    }
    public function UpdateSocial(Request $request)
    {
        $data = Social::findOrFail($request->id);
        $data->fill($request->all())->save();
        return back()->with('success', 'Saved Successfully!');
    } 
//End
 
//About
    public function aboutus()
    {
        $data['title']='About us';
        $data['value'] = About::first();
        $data['image'] = Aboutimages::orderby('id', 'desc')->get();
        return view('admin.web-control.about-us', $data);
    }
    public function UpdateAbout(Request $request)
    {
        $data = About::findOrFail(1);
        $data->fill(Purifier::clean($request->all()))->save();
        return back()->with('success', 'Saved Successfully!');
    }
    public function DestroyAbout($id)
    {
        $data = Aboutimages::findOrFail($id);
        $res =  $data->delete();
        if ($res) {
            return back()->with('success', 'Successfully deleted!');
        } else {
            return back()->with('alert', 'Problem With Deleting Image');
        }
    }
    public function CreateAbout(Request $request)
    {
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = 'about_'.time().'.'.$image->extension();
            $location = 'asset/images/' . $filename;
            Image::make($image)->save($location);
            $data['image'] = $filename;
        }
        $res = Aboutimages::create($data);
        if ($res) {
            return redirect()->route('about-us')->with('success', 'Saved Successfully!');
        } else {
            return back()->with('alert', 'Problem With Creating Brand');
        }
    }
//End  

//Privacy
    public function privacypolicy()
    {
        $data['title']='Privacy policy';
        $data['value'] = About::first();
        return view('admin.web-control.privacy-policy', $data);
    }
    public function UpdatePrivacy(Request $request)
    {
        $data = About::findOrFail(1);
        $data->fill(Purifier::clean($request->all()))->save();
        return back()->with('success', 'Saved Successfully!');
    }
//End

//Terms
    public function terms()
    {
        $data['title']='Terms & Conditions';
        $data['value'] = About::first();
        return view('admin.web-control.terms', $data);
    }
    public function UpdateTerms(Request $request)
    {
        $data = About::findOrFail(1);
        $data->fill(Purifier::clean($request->all()))->save();
        return back()->with('success', 'Saved Successfully!');
    }
//End
    
//Logo
    public function logo()
    {
        $data['title']='Logo & Favicon';
        return view('admin.web-control.logo', $data);
    }
    public function UpdateLogo(Request $request)
    {

        $data = Logo::find(1);
        if($request->hasFile('logo')){
            $image = $request->file('logo');
            $filename = 'logo_'.time().'.'.$image->extension();
            $location = 'asset/images/' . $filename;
            Image::make($image)->save($location);
            $path = './asset/';
            File::delete($path.$data->image_link);
            $data['image_link'] = 'images/'.$filename;
        }
        $res = $data->save();
        if ($res) {
            return back()->with('success', 'Updated Successfully!');
        } else {
            return back()->with('alert', 'Problem With Updating Logo');
        }
        return $data;
    }     
    

    
    public function UpdateFavicon(Request $request)
    {

        $data = Logo::find(1);
        if($request->hasFile('favicon')){
            $image = $request->file('favicon');
            $filename = 'favicon_'.time().'.'.$image->extension();
            $location = 'asset/images/' . $filename;
            Image::make($image)->save($location);
            $path = './asset/';
            File::delete($path.$data->image_link2);
            $data['image_link2'] = 'images/'.$filename;
        }
        $res = $data->save();
        if ($res) {
            return back()->with('success', 'Updated Successfully!');
        } else {
            return back()->with('alert', 'Problem With Updating Logo');
        }
        return $data;
    }
//End
    
//Faq
    public function faq()
    {
        $data['title']='Frequently asked questions';
        $data['fcat'] = Faqcategory::orderby('id', 'desc')->get();
        $data['faq'] = Faq::orderby('id', 'desc')->get();
        return view('admin.web-control.faq', $data);
    }   

    public function DestroyFaq($id)
    {
        $data = Faq::findOrFail($id);
        $res =  $data->delete();
        if ($res) {
            return back()->with('success', 'Faq was Successfully deleted!');
        } else {
            return back()->with('alert', 'Problem With Deleting Faq');
        }
    } 

    public function delfaqcategory($id)
    {
        $data = Faqcategory::findOrFail($id);
        $check=Faq::wherecat_id($id)->count();
        if($check>0){
            return back()->with('alert', 'Problem With Deleting Category, it already used for an existing faq');
        }else{
            $data->delete();
            return back()->with('success', 'Category was Successfully deleted!');
        }
    }

    public function CreateFaqcategory(Request $request)
    {
        $macCount = Faqcategory::where('name', $request->name)->count();
        if ($macCount > 0) {
            return back()->with('alert', 'This one Already Exist');
        }
        else {
            $data['name'] = $request->name;
            $res = Faqcategory::create($data);
            if ($res) {
                return back()->with('success', 'Saved Successfully!');
            } else {
                return back()->with('alert', 'Problem With Adding New Category');
            }
        }
    } 
    
    public function UpdateFaqcategory(Request $request)
    {
        $mac = Faqcategory::findOrFail($request->id);
        $mac['name'] = $request->name;
        $res = $mac->save();
        if ($res) {
            return back()->with('success', ' Updated Successfully!');
        } else {
            return back()->with('alert', 'Problem With Updating Category');
        }
    }
    public function CreateFaq(Request $request)
    {
        $data['question'] = $request->question;
        $data['answer'] = $request->answer;
        $data['cat_id'] = $request->cat;
        $res = Faq::create($data);
        if ($res) {
            return back()->with('success', 'Saved Successfully!');
        } else {
            return back()->with('alert', 'Problem With Creating New Faq');
        }
    }      
    public function UpdateFaq(Request $request)
    {
        $mac = Faq::findOrFail($request->id);
        $mac['question'] = $request->question;
        $mac['answer'] = $request->answer;
        $mac['cat_id'] = $request->cat;
        $res = $mac->save();
        if ($res) {
            return back()->with('success', ' Updated Successfully!');
        } else {
            return back()->with('alert', 'Problem With Updating Faq');
        }
    } 
//End of Faq  
    
//Services
    public function services()
    {
        $data['title']='Services';
        $data['service'] = Services::latest()->get();
        return view('admin.web-control.service', $data);
    }
    public function CreateService(Request $request)
    {
        $data=new Services();
        $data->fill($request->all())->save();
        return back()->with('success', 'Saved Successfully!');
    }
    public function UpdateService(Request $request)
    {
        $data = Services::findOrFail($request->id);
        $data->fill($request->all())->save();
        return back()->with('success', 'Saved Successfully!');
    }
    public function DestroyService($id)
    {
        $data = Services::findOrFail($id);
        $data->delete();
        return back()->with('success', 'Service was Successfully deleted!');
    }
//End

//Page
    public function page()
    {
        $data['title']='Web pages';
        $data['page'] = Page::latest()->get();
        return view('admin.web-control.page', $data);
    }
    public function unpage($id)
    {
        $data=Page::find($id);
        $data->status=0;
        $data->save();
        return back()->with('success', 'Page has been unpublished.');
    } 
    public function ppage($id)
    {
        $data=Page::find($id);
        $data->status=1;
        $data->save();
        return back()->with('success', 'Page was successfully published.');
    } 
    public function CreatePage(Request $request)
    {
        $data=new Page();
        $data->title=$request->title;
        $data->slug=Str::slug($request->title);
        $data->content=Purifier::clean($request->content);
        $data->save();
        return back()->with('success', 'Saved Successfully!');
    } 
    public function UpdatePage(Request $request)
    {
        $data = Page::findOrFail($request->id);
        $data->title=$request->title;
        $data->slug=Str::slug($request->title);
        $data->content=Purifier::clean($request->content);
        $data->save();
        return back()->with('success', 'Saved Successfully!');
    }
    public function DestroyPage($id)
    {
        $data = Page::findOrFail($id);
        $data->delete();
        return back()->with('success', 'Service was Successfully deleted!');
    }
//End

//Home
    public function homepage()
    {
        $data['title']='Homepage';
        return view('admin.web-control.home', $data);
    }
    public function Updatehomepage(Request $request)
    {
        $data = Design::findOrFail(1);
        $data->fill($request->all())->save();      
        return back()->with('success', 'Update was Successful!');
    } 
    public function section1(Request $request)
    {
        $data = Design::find(1);
        if($request->hasFile('section1')){
            $image = $request->file('section1');
            $filename = 'section1_'.time().'.'.$image->extension();
            $location = 'asset/images/' . $filename;
            Image::make($image)->save($location);
            $path = './asset/images/';
            File::delete($path.$data->image1);
            $data['image1'] = $filename;
        }
        $res = $data->save();
        if ($res) {
            return back()->with('success', 'Updated Successfully!');
        } else {
            return back()->with('alert', 'Problem With Updating Image');
        }
        return $data;
    }    
    public function section2(Request $request)
    {
        $data = Design::find(1);
        if($request->hasFile('section2')){
            $image = $request->file('section2');
            $filename = 'section2_'.time().'.'.$image->extension();
            $location = 'asset/images/' . $filename;
            Image::make($image)->save($location);
            $path = './asset/images/';
            File::delete($path.$data->image2);
            $data['image2'] = $filename;
        }
        $res = $data->save();
        if ($res) {
            return back()->with('success', 'Updated Successfully!');
        } else {
            return back()->with('alert', 'Problem With Updating Image');
        }
        return $data;
    }    
    public function section3(Request $request)
    {
        $data = Design::find(1);
        if($request->hasFile('section3')){
            $image = $request->file('section3');
            $filename = 'section3_'.time().'.'.$image->extension();
            $location = 'asset/images/' . $filename;
            Image::make($image)->save($location);
            $path = './asset/images/';
            File::delete($path.$data->image3);
            $data['image3'] = $filename;
        }
        $res = $data->save();
        if ($res) {
            return back()->with('success', 'Updated Successfully!');
        } else {
            return back()->with('alert', 'Problem With Updating Image');
        }
        return $data;
    }    
    public function section4(Request $request)
    {
        $data = Design::find(1);
        if($request->hasFile('section4')){
            $image = $request->file('section4');
            $filename = 'section3_'.time().'.'.$image->extension();
            $location = 'asset/images/' . $filename;
            Image::make($image)->save($location);
            $path = './asset/images/';
            File::delete($path.$data->image4);
            $data['image4'] = $filename;
        }
        $res = $data->save();
        if ($res) {
            return back()->with('success', 'Updated Successfully!');
        } else {
            return back()->with('alert', 'Problem With Updating Image');
        }
        return $data;
    }    
    public function section5(Request $request)
    {
        $data = Design::find(1);
        if($request->hasFile('section5')){
            $image = $request->file('section5');
            $filename = 'section5_'.time().'.'.$image->extension();
            $location = 'asset/images/' . $filename;
            Image::make($image)->save($location);
            $path = './asset/images/';
            File::delete($path.$data->image5);
            $data['image5'] = $filename;
        }
        $res = $data->save();
        if ($res) {
            return back()->with('success', 'Updated Successfully!');
        } else {
            return back()->with('alert', 'Problem With Updating Image');
        }
        return $data;
    }     
//End 
     
//Review
    public function review()
    {
        $data['title']='Reviews';
        $data['review'] = Review::orderby('id', 'desc')->get();
        return view('admin.web-control.review', $data);
    }
    public function EditReview($id)
    {
        $data['title']='Reviews';
        $data['val'] = Review::find($id);
        return view('admin.web-control.review-edit', $data);
    } 
    public function unreview($id)
    {
        $data=Review::find($id);
        $data->status=0;
        $data->save();
        return back()->with('success', 'Review has been unpublished.');
    } 
    public function preview($id)
    {
        $data=Review::find($id);
        $data->status=1;
        $data->save();
        return back()->with('success', 'Review was successfully published.');
    }
    public function CreateReview(Request $request)
    {
        $data['name'] = $request->name;
        $data['occupation'] = $request->occupation;
        $data['review'] = Purifier::clean($request->review);
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = 'review_'.time().'.'.$image->extension();
            $location = 'asset/review/' . $filename;
            Image::make($image)->save($location);
            $data['image_link'] = $filename;
        }
        $res = Review::create($data);
        if ($res) {
            return redirect()->route('admin.review')->with('success', 'Saved Successfully!');
        } else {
            return back()->with('alert', 'Problem With Creating Review');
        }
    }
    public function UpdateReview(Request $request)
    {
        $data = Review::find($request->id);
        $data['name'] = $request->name;
        $data['occupation'] = $request->occupation;
        $data['review'] = $request->review;
        if($request->hasFile('update')){
            $image = $request->file('update');
            $filename = 'update_'.time().'.'.$image->extension();
            $location = 'asset/review/' . $filename;
            $path = './asset/review/';
            File::delete($path.$data->image_link);
            Image::make($image)->save($location);
            $data['image_link'] = $filename;
        }
        $res = $data->save();
        if ($res) {
            return redirect()->route('admin.review')->with('success', 'Saved Successfully!');
        } else {
            return back()->with('alert', 'Problem With Updating Review');
        }
    } 
    public function DestroyReview($id)
    {
        $data = Review::findOrFail($id);
        $data->delete();
        return back()->with('success', 'Service was Successfully deleted!');
    }  
//
  
//Team
    public function team()
    {
        $data['title']='Team';
        $data['review'] = Team::orderby('id', 'desc')->get();
        return view('admin.web-control.team', $data);
    }        

    public function EditTeam($id)
    {
        $data['title']='team';
        $data['val'] = Team::find($id);
        return view('admin.web-control.team-edit', $data);
    } 
    public function unteam($id)
    {
        $data=Team::find($id);
        $data->status=0;
        $data->save();
        return back()->with('success', 'Team member has been unpublished.');
    } 
    public function pteam($id)
    {
        $data=Team::find($id);
        $data->status=1;
        $data->save();
        return back()->with('success', 'Team member was successfully published.');
    }
    public function CreateTeam(Request $request)
    {
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = 'team_'.time().'.'.$image->extension();
            $location = 'asset/review/' . $filename;
            Image::make($image)->save($location);
            $data['image'] = $filename;
        }
        $data->save();
        return redirect()->route('admin.team')->with('success', 'Saved Successfully!');
    }       
    public function UpdateTeam(Request $request)
    {
        $data = Team::find($request->id);
        $res = $data->fill($request->all())->save();
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = 'team_'.time().'.'.$image->extension();
            $location = 'asset/review/' . $filename;
            $path = './asset/review/';
            File::delete($path.$data->image);
            Image::make($image)->save($location);
            $data['image'] = $filename;
            $data->save();
        }
        if ($res) {
            return  redirect()->route('admin.team')->with('success', 'Saved Successfully!');
        } else {
            return back()->with('alert', 'Problem With Updating Team');
        }
    }
    public function DestroyTeam($id)
    {
        $data = team::findOrFail($id);
        $data->delete();
        return back()->with('success', 'Service was Successfully deleted!');
    }
//End
      
//Brand
    public function brand()
    {
        $data['title']='Brands';
        $data['brand'] = Brands::latest()->get();
        return view('admin.web-control.brand', $data);
    } 
    public function EditBrand($id)
    {
        $data['title']='Brands';
        $data['val'] = Brands::find($id);
        return view('admin.web-control.brand-edit', $data);
    }
    public function unbrand($id)
    {
        $data=Brands::find($id);
        $data->status=0;
        $data->save();
        return back()->with('success', 'Brand has been unpublished.');
    } 
    public function pbrand($id)
    {
        $data=Brands::find($id);
        $data->status=1;
        $data->save();
        return back()->with('success', 'Brand was successfully published.');
    }
    public function DestroyBrand($id)
    {
        $data = Brands::findOrFail($id);
        $data->delete();
        return back()->with('success', 'Service was Successfully deleted!');
    }  
    public function CreateBrand(Request $request)
    {
        $data['title'] = $request->title;
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = 'brand_'.time().'.'.$image->extension();
            $location = 'asset/brands/' . $filename;
            Image::make($image)->save($location);
            $data['image'] = $filename;
        }
        $res = Brands::create($data);
        if ($res) {
            return redirect()->route('admin.brand')->with('success', 'Saved Successfully!');
        } else {
            return back()->with('alert', 'Problem With Creating Brand');
        }
    }    
    public function UpdateBrand(Request $request)
    {
        $data = Brands::find($request->id);
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = 'brand_'.time().'.'.$image->extension();
            $location = 'asset/brands/' . $filename;
            Image::make($image)->save($location);
            $path = './asset/brands/';
            File::delete($path.$data->image);
            $data->image = $filename;
        }
        $data->title = $request->title;
        $data->save();
        return redirect()->route('admin.brand')->with('success', 'Saved Successfully!');
    }
//End

//Currency
    public function currency()
    {
        $data['title']='Currency';
        $data['cur'] = Currency::all();
        return view('admin.web-control.currency', $data);
    }

    public function pcurrency($id)
    {
        $data=Currency::all();
        foreach ($data as $val){
            $val->status=0;
            $val->save();
        }
        $default=Currency::find($id);
        $default->status=1;
        $default->save();
        return back()->with('success', 'Update was Successful!.');
    }
//End      
}
