<?php

namespace App\Http\Controllers;

use Schema;
use App\Models\Products;
use Illuminate\Http\Request;
use Database\Seeders\product;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Models;


class AdminCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $products = Products::all();

        return view('index2', compact('products'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Create');
    }
    
    /**
     * Store a newly created resource in storage.
     */




    public function store(Request $request)
    {


        $name_product = $request->input("name_product");
        $unit_price = $request->input("unit_price");
        $url_images = null;
        $arr = [
            'name_product' => $name_product,
            'unit_price' => $unit_price,
            'url_images' => $url_images,
        ];

        if (isset($request->url_images)) {
            $request->photo->store('public/pack/img');
            $nomphoto = $request->photo->hashName();
            $arr['url_images'] = $url_images;
        }
        DB::table("products")->insert($arr);
        return redirect("/product");
    }
    // public function show($id)
    // {
    //     $product = Product::find($id);

    //     return view('show', compact('product', $product));
    // }

    
    public function edit($id)
    {
        $product = DB::table("products")->find($id);
        return view("edit", ["product" => $product]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name_product' => 'required|string',
            'unit_price' => 'required|numeric',
            'url_images' => 'required|url',
        ]);
    
        $name_product = $request->input("name_product");
        $unit_price = $request->input("unit_price");
        $url_images = $request->input("url_images");
    
        DB::table("products")->where('id', $id)->update([
            'name_product' => $name_product,
            'unit_price' => $unit_price,
            'url_images' => $url_images,
        ]);
    
        return redirect('/product')->with('success', 'Product updated successfully');
    }
    

    



    /**
     * Remove the specified resource from storage.
     */
    
    public function destroy($id)
    {
        DB::table("products")->where('id',$id)->delete();
        return redirect("/product");
    }
}