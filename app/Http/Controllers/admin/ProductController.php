<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductSaveRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;



class ProductController
{
    public function list(){
       $products=Product::  paginate(15);
        return view('admin.products.list',compact('products'));
    }
    public function create(){
        $categories=Category::all();
        return view('admin.products.create',compact('categories'));
    }

    public function save(ProductSaveRequest $request){
        $input=$request->validated();
        if($request->hasFile('image')){
            $extension=$request->image->extension();
            $filename=Str::random(6)."_".time()."_product.".$extension;
            $request->image->storeAs('images',$filename);
            $input['image']=$filename;

        }
        Product::create($input);
        return redirect()->route('admin.product.list')->with('message','Prodduct saved successfully');  

    }
    public function edit($id){
        $product=Product::find(decrypt($id));
        $categories=Category::all();


        return View('admin.productS.edit',compact('product','categories'));
    }

    public function update(ProductSaveRequest $request){
        $input=$request->validated();
        $product=Product::find(decrypt($request->product_id));
        if($request->hasFile('image')){
            Storage::delete('images/'.$product->image);
            $extension=$request->image->extension();
            $filename=Str::random(6)."_".time()."_product.".$extension;
            $request->image->storeAs('images',$filename);
            $input['image']=$filename;



        }

        $product->update($input);
        return redirect()->route('admin.product.list')->with('message','Product updated succesfully');


    }
    


    public function delete($id){

        $product=Product::find(decrypt($id));
        if(!empty($product)){
            Storage::delete('images/'.$product->image);
        }
        $product->delete();      
        return redirect()->route('admin.product.list')->with('message','Product deleted succesfully');
    }
   
}
