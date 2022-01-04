<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // getting the data from database , the latest product with the pages function
        $Products=Product::latest()->paginate(5);

        // return the view with param and the pages count 
        return view('products.index',compact('Products'))->with(request()->input('page')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate The input
        $request->validate([
            'name'=>'required',
            'detail'=>'required'
        ]);

        // create a new product
            Product::create($request->all());


        // redirect the user + send a friendly message
        return redirect()->route('products.index')->with('success','Product created Succefully ');
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // Validate the input
        $request->validate([
            'name'=>'required',
            'detail'=>'required'
        ]);
        // update  the product
        $product->update($request->all());
        // redirect the product with Message
        return redirect()->route('products.index')->with('success','Product updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //  delete the product 
        $product->delete();
        // redirect the user and display the success message
        return redirect()->route('products.index')->with('success','Product Deleted');
    }
}
