<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('frontend.blogPosts.blog');
    } 

    public function show(){
        return view('frontend.blogPosts.single-blog-post');
    }

    public function create(){
        return view('frontend.blogPosts.create-blog-post');
    }

    public function store(Request $request){
        $request->validate([
            'title'=>'required',
            'image'=>'required | image',
            'body'=>'required'
        ]);
    }
} 
