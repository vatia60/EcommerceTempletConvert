<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\Product;

class PageController extends Controller
{
    public function index()
    {
        $data = [];
        $data['categories'] = Category::with(['products'])->get();
        $data['cart'] = session()->has('cart') ? session()->get('cart') : [];
        $data['total'] = array_sum(array_column($data['cart'], 'total_price'));
        return view('frontend.index', $data);
    }

    public function productdetails($id)
    {
        $data = [];
        $data['categories'] = Category::where('id', $id)->get();
        $data['products'] = Product::where('category_id', $id)->get();
        return view('frontend.productdetails', $data);
    }

    public function productaddcart($id)
    {
        $data = [];
        $data['categories'] = Category::where('id', $id)->get();
        $data['products'] = Product::where('id', $id)->get();
        return view('frontend.singleproduct', $data);
    }
}
