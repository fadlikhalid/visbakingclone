<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        //$search = request()->query('search');
        $product = Product::latest();

        // if($search){
        //     $product->where('name', 'like', '%' . $search . '%');
        //     //$product->where('name', $search);
        //     return view('frontend.shop.index', ['prod' => $product->get()]);
        // }else{           
        //     return view('frontend.shop.index', ['prod' => $product->get()]);
        // }
        return view('frontend.shop.index', ['prod' => $product->get()]);
    }

    public function productDetail(){
        $pname = $_GET["name"];
        $productDetail = Product::where('name', $pname)->get();
        return view('frontend.product.show', ['prod' => $productDetail]);
    }
}
