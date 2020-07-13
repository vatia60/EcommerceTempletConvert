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
        return view('frontend.index', $data);
    }
}
