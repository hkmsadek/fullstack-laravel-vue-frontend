<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request){
        $categories = Category::select('id', 'categoryName')->get();
        $blogs = Blog::orderBy('id', 'desc')->with(['cat', 'user'])->limit(6)->get(['id', 'title', 'post_excerpt', 'slug', 'user_id', 'featuredImage']);

        return view('home')->with(['categories' => $categories, 'blogs' => $blogs]);
    }

    public function blogSingle(Request $request, $slug){
        $categories = Category::select('id', 'categoryName')->get();
        $blog = Blog::where('slug', $slug)->with(['cat','tag' , 'user'])->first(['id', 'title', 'user_id', 'featuredImage', 'post']);
        return view('blogsingle')->with(['categories' => $categories, 'blog' => $blog]);

    }


}
