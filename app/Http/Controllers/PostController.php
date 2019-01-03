<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;

class PostController extends Controller
{
    public function index() {
        $categories=Category::orderBy('created_at','dosc')->get();
        return view('pages.addNewPost')->with('categories',$categories);
    }

    public function store(Request $request){
        $this->validate($request,['postTitle'=>'required|min:3|max:200','postCategory'=>'required','postContent'=>'required']);
        $post=new Post();
        $post->title=$request->postTitle;
        $post->author="Arshal";
        $post->category=$request->postCategory;
        $post->post=$request->postContent;
        $post->save();
        session()->flash('Success','Post Added Successfully');
        return back();
    }
}
