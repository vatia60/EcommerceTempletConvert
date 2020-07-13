<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Model\Product;
use App\Model\Category;
use File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = [];
         $data['products'] = Product::with('category')->get();
         return view('backend.product.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];
        $data['categories'] = Category::select(['id','name'])->get();
        return view('backend.product.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'price' => 'required',
          ]);

          try {

            if($request->hasFile('image')){
                $imageName = time().'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('images/eproduct'), $imageName);

            }

           Product::create([
               'title' => $request->input('title'),
               'slug' => Str::slug($request->input('title')),
               'image' => $imageName,
               'description' => $request->input('description'),
               'price' => $request->input('price'),
               'sale_price' => $request->input('sale_price'),
               'category_id' => $request->input('category_id'),
              ]);

              $this->setSuccess('Product created successfully');

              return redirect()->back();

          } catch (\Exception $e) {

              $this->setError($e->getMessage());
              return redirect()->back();
          }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $data = [];
         $data['products'] = Product::where('id', $id)->first();
         return view('backend.product.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
          ]);

          try {

            $product = Product::find($id);

            if(count([$request->image]) > 0){

               if(File::exists("images/eproduct".$product->image)){

                  File::delete("images/eproduct".$product->image);

               }

               if($request->hasFile('image')){

                $imageName = time().'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('images/categories'), $imageName);

                }
                $imageName = $product->image;

            }


           $product->update([
               'title' => $request->input('title'),
               'image' => $imageName,
               'description' => $request->input('description'),
               'price' => $request->input('price'),
               'sale_price' => $request->input('sale_price'),
               'category_id' => $request->input('category_id'),
              ]);

              $this->setSuccess('Product Updated successfully');

              return redirect()->route('product.index');

          } catch (\Exception $e) {

              $this->setError($e->getMessage());
              return redirect()->back();
          }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if(File::exists('images/eproduct/'.$product->image)){
            File::delete('images/eproduct/'.$product->image);
         }

        $product->delete();
        $this->setSuccess('Product Delete successfully');

        return redirect()->back();

    }
}
