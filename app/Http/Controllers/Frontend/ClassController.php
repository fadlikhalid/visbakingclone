<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CourseClass;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        //$search = request()->query('search');
        $class = CourseClass::latest();
        $class->where('is_available', 'like', '%' . 0 . '%');

        // if($search){
        //     $product->where('name', 'like', '%' . $search . '%');
        //     //$product->where('name', $search);
        //     return view('frontend.shop.index', ['prod' => $product->get()]);
        // }else{           
        //     return view('frontend.shop.index', ['prod' => $product->get()]);
        // }
        return view('frontend.class.class', ['class' => $class->get()]);
        //return view('frontend.class.class');
    }
    
}
