<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        //$search = request()->query('search');
        $blog = Blog::get();
        //$blog->where('is_available', 'like', '%' . 0 . '%');

        // if($search){
        //     $product->where('name', 'like', '%' . $search . '%');
        //     //$product->where('name', $search);
        //     return view('frontend.shop.index', ['prod' => $product->get()]);
        // }else{           
        //     return view('frontend.shop.index', ['prod' => $product->get()]);
        // }
        return view('frontend.blog.blog', ['blog' => $blog]);
        //return view('frontend.blog.blog');
    }
}


