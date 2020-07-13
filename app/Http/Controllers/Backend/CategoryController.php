<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Model\Category;
use File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = [];
         $data['categories'] = Category::select(['id','name', 'slug', 'image'])->get();
         return view('backend.category.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.create');
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
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
          ]);

          try {

            if($request->hasFile('image')){
                $imageName = time().'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('images/categories'), $imageName);

            }

           Category::create([
               'name' => $request->input('name'),
               'slug' => Str::slug($request->input('name')),
               'image' => $imageName,
              ]);

              $this->setSuccess('Category created successfully');

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
         $data['categories'] = Category::where('id', $id)->first();
         return view('backend.category.edit', $data);
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
           
            $category = Category::find($id);

            if(count([$request->image]) > 0){

               if(File::exists("images/categories".$category->image)){ 

                  File::delete("images/categories".$category->image); 

               }

               if($request->hasFile('image')){

                $imageName = time().'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('images/categories'), $imageName);

                }
                $imageName = $category->image;

            }


           $category->update([
               'name' => $request->input('name'),
               'image' => $imageName,
              ]);

              $this->setSuccess('Category Updated successfully');

              return redirect()->route('category.index');

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
        $category = Category::find($id);
        if(File::exists('images/categories/'.$category->image)){
            File::delete('images/categories/'.$category->image);
         }

        $category->delete();
        $this->setSuccess('Category Delete successfully');

        return redirect()->back();

    }
}
