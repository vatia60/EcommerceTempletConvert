<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Cart;
use App\Model\Order;

class AddtocartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addtocart(Request $request)
    {
        $this->validate($request,[
            'addtocart' => 'required'
         ]);

        $product = Product::findOrFail($request->input('addtocart'));

        $cart = session()->has('cart') ? session()->get('cart') : [];

        $unit_price = ($product->sale_price !== null && $product->sale_price > 0) ? $product->sale_price : $product->price;

        if(array_key_exists($product->id, $cart)){

            $cart[$product->id]['quantity']++;
            $cart[$product->id]['total_price'] = $cart[$product->id]['quantity'] * $cart[$product->id]['unit_price'];

        }else {
            $cart[$product->id] = [
             'title' => $product->title,
             'quantity' => 1,
             'unit_price' => $unit_price,
             'total_price' => $unit_price,
            ];
        }

        session(['cart' => $cart]);

        return redirect()->back();
    }

    public function showcart(){

        $data = [];
        $data['cart'] = session()->has('cart') ? session()->get('cart') : [];
        $data['total'] = array_sum(array_column($data['cart'], 'total_price'));

        return view('frontend.cart.showcart', $data);
    }

    public function removecart(Request $request){

        $this->validate($request,[
            'removecart' => 'required'
         ]);

        $cart = session()->has('cart') ? session()->get('cart') : [];
        unset($cart[$request->input('removecart')]);

        session(['cart' => $cart]);

        return redirect()->back();
    }

    public function clearcart(){
        session(['cart' => []]);
        return redirect()->back();
    }

    public function checkout(){
        $data = [];
        $data['cart'] = session()->has('cart') ? session()->get('cart') : [];
        $data['total'] = array_sum(array_column($data['cart'],'total_price'));

        return view('frontend.cart.checkout', $data);
    }

    public function cartporcess(Request $request){
        $this->validate($request,[
            'customer_name' => 'required',
            'customer_phone' => 'required',
         ]);

        $cart = session()->has('cart') ? session()->get('cart') : [];
        $total = array_sum(array_column($cart, 'total_price'));

         $order = Order::create([
            'user_id' => 1,
            'customer_name' => $request->input('customer_name'),
            'customer_phone' => $request->input('customer_phone'),
            'total_amount' => $total,
            'paid_amount' => $total,
         ]);

         foreach ($cart as $key => $product) {
             $order->products()->create([
                   'product_id' => $key,
                   'order_id' => $order->id,
                   'quantity' => $product['quantity'],
                   'price' => $total,
             ]);

          session()->forget(['total', 'cart']);
          $this->setSuccess('Checkout processed successfully.');
          return redirect()->route('frontend.page.index');
         }

    }

    public function cartdetails($id){
        $data = [];
        $data['order'] = Order::findOrFail($id);
        return view('frontend.cart.cartdetails', $data);
    }

    public function orderdashboard(){
        $data = [];
        $data['order'] = Order::select(['customer_name', 'created_at','id'])->get();
        return view('frontend.cart.orderdasboard', $data);
    }



}
