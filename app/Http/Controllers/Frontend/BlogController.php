<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactSubmission;
use App\Models\Comment;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BlogController extends Controller
{
public function index()
{
   $blogs = Blog::where("visibility", "1")->paginate(7);


    return view("frontend.blog", compact('blogs'));
}


    public function detail($slug){
        $blog = Blog::where('slug',$slug)->first();
        $latest_blog = Blog::where('visibility', 1)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();


        return view("frontend.blog-detail", compact('blog','latest_blog'));
    }



}
