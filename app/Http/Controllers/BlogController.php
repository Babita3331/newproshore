<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function storeblog(Request $request)
    {
//        dd($request->all);
        $request->validate([
            'blog_title' => 'required',
            'description' => 'required',
            'image' => 'required|image',
            'status' => 'required|in:active,inactive'
        ]);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $path = public_path().'/upload/blog/';
            $fileName = $file->getClientOriginalName();
            $fileNameToStore = "Blog_".time().rand(1,1000).$fileName;
            $file->move($path,$fileNameToStore);
        }else{
            $fileNameToStore = "noimg.jpg";
        }
        $blog = new Blog();
//        dd($blog);
        $blog->blog_title = $request->get('blog_title');
        $blog->blog_author = $request->get('blog_author');
        $blog->description = htmlspecialchars($request->get('description'));
        $blog->status = $request->get('status');
        $blog->image = $fileNameToStore;
        $status = $blog->save();
        if($status){
            return redirect()->route('index')->with('success','Blog created successfully');
        }else{
            return redirect()->route('index')->with('error','Something went wrong!Please try again later');
        }
    }
}
