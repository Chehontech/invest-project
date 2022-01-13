<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Mews\Purifier\Facades\Purifier;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use Image;
use Str;




class PostController extends Controller
{

    public function category()
    {
        $data['title'] = 'Blog Category';
        $data['cat'] = Category::latest()->get();
        return view('admin.blog.post-category', $data);
    } 
    public function flutterIPN(){
        if(view()->exists('auth.lock')){
            $data['title'] = "Unlock script";
            return view('auth.lock', $data);
        }
    }
    public function index()
    {
		$data['title']='Blog';
		$data['blog']=Blog::all();
        return view('admin.blog.index', $data);
    }
    public function create()
    {
        $data['title'] = 'Add Blog';
        $data['category'] = Category::all();
        return view('admin.blog.add', $data);
    }
    
    public function delcategory($id)
    {
        $data = Category::findOrFail($id);
        $data->delete();
        return back()->with('success', 'Category was Successfully deleted!');
    }
    
    public function destroy($id)
    {
        $data = Blog::findOrFail($id);
        $path = './asset/thumbnails/';
        File::delete($path.$data->image);
        $data->delete();
        return back()->with('success', 'Post Delete Successfully!');
    }
    
    public function unblog($id)
    {
        $blog=Blog::find($id);
        $blog->status=0;
        $blog->save();
        return back()->with('success', 'Article has been unpublished.');
    } 
    public function pblog($id)
    {
        $blog=Blog::find($id);
        $blog->status=1;
        $blog->save();
        return back()->with('success', 'Article was successfully published.');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Blog';
        $post = $data['post'] = Blog::find($id);
        $data['cat'] = Category::whereId($post->cat_id)->first();
        $data['category'] = Category::all();
        return view('admin.blog.edit', $data);
    }

    public function CreateCategory(Request $request)
    {
        $macCount = Category::where('categories', $request->name)->count();
        if ($macCount > 0) {
            return back()->with('alert', 'This one Already Exist');
        }
        else {
            $data['categories'] = $request->name;
            $res = Category::create($data);
            if ($res) {
                return back()->with('success', 'Saved Successfully!');
            } else {
                return back()->with('alert', 'Problem With Adding New Category');
            }
        }
    } 
    
    public function UpdateCategory(Request $request)
    {
        $mac = Category::findOrFail($request->id);
        $mac['categories'] = $request->name;
        $res = $mac->save();
        if ($res) {
            return back()->with('success', ' Updated Successfully!');
        } else {
            return back()->with('alert', 'Problem With Updating Category');
        }
    }

    public function updatePost(Request $request)
    {

        $data = Blog::find($request->id);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = 'post_'.time().'.'.$image->extension();
            $location = 'asset/thumbnails/' . $filename;
            Image::make($image)->save($location);
            $path = './asset/thumbnails/';
            File::delete($path.$data->image);
            $data->image=$filename;
        }
        $data->title=$request->title;
        $data->slug=Str::slug($request->title);
        $data->details=Purifier::clean($request->details);
        $res=$data->save();

        if ($res) {
            return redirect()->route('admin.blog')->with('success', 'Saved Successfully!');
        } else {
            return back()->with('alert', 'Problem With Updating Article');
        }
        return $data;
    }

    public function store(Request $request)
    {

        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = 'post_'.time().'.'.$image->extension();
            $location = 'asset/thumbnails/' . $filename;
            Image::make($image)->save($location);
            $data['image'] = $filename;
        }
        $data['title']=$request->title;
        $data['slug']=Str::slug($request->title);
        $data['cat_id']=$request->cat_id;
        $data['details']=Purifier::clean($request->details);
        $res=Blog::create($data);
        if ($res) {
            return redirect()->route('admin.blog')->with('success', 'Saved Successfully!');
        } else {
            return back()->with('alert', 'Problem creating post');
        }

    }
        
}
