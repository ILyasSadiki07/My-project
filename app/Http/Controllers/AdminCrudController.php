<?php

namespace App\Http\Controllers;

use Schema;
use App\Models;
use App\Models\Products;
use Illuminate\Http\Request;
use Database\Seeders\product;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


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
        $url_images =$request->input("photo");
        //return dd($url_images);
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
//     public function show($id)
// {
//     $product = Products::find($id);

//     if ($product === null) {
//         // Handle the case where the product is not found
//         abort(404); // Return a 404 error page or redirect to an appropriate page
//     }

//     return view('show2', compact('product'));
// }


    
    public function edit($id)
    {
        // $product = DB::table("products")->find($id);
        // return view("edit", ["product" => $product]);
          //
          $product = Products::where('id', $id)->first();
          return view("edit")->with([
              "product" => $product
          ]);
    }

//      public function update(Request $request, $id)
//     {
//     //     $request->validate([
//     //         'name_product' => 'required|string',
//     //         'unit_price' => 'required|numeric',
//     //         'url_images' => 'required|url',
//     //     ]);
    
//     //     $name_product = $request->input("name_product");
//     //     $unit_price = $request->input("unit_price");
//     //     $url_images = $request->input("url_images");
    
//     //     DB::table("products")->where('id', $id)->update([
//     //         'name_product' => $name_product,
//     //         'unit_price' => $unit_price,
//     //         'url_images' => $url_images,
//     //     ]);
    
//     //     return redirect('/product')->with('success', 'Product updated successfully');
//     // }
//     $product = Products::where('id', $id)->first();
//     $this->validate($request, [
//         'name_product' => 'required',
//         'unit_price' => 'required|number' . $product->id,
//         'url_image' => 'required|url',
        
//     ]);
//     $data = $request->except(['_token', '_method']);
//     $product->update($data);
//     return redirect()->route("listeProducts")->with([
//         "success" => "products updated successfully"
    
//     ]);
 
// }

// public function update(Request $request, $id)
// {
//     $product = Products::findOrFail($id); // Use findOrFail to handle non-existing product IDs

//     $request->validate([
//         'name_product' => 'required',
//         'unit_price' => 'required|numeric',
//         'url_images' => 'required|url',
//     ]);

//     $product->update($request->all()); // Update the product with the request data

//     return redirect('/product');
// }
public function update(Request $request, $id)
{
    // $request->validate([
    //     'name_product' => 'required',
    //     'unit_price' => 'required|numeric',
    //     'url_images' => 'required|url',
    // ]);

    $name_product = $request->input("name_product");
    $unit_price = $request->input("unit_price");
    $url_images = $request->input("url_images");
  
    DB::table("products")->where('id', $id)->update([
        'name_product' => $name_product,
        'unit_price' => $unit_price,
        'url_images' => $url_images,
    ]);

    return redirect('/product');
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




    // $product = Products::findOrFail($id); // Use findOrFail to handle non-existing product IDs

    // $request->validate([
    //     'name_product' => 'required|string',
    //     'unit_price' => 'required|numeric',
    //     'url_images' => 'required|url',
    // ]);

 // $product->update($request->all()); // Update the product with the request data

    // return redirect('products')->with('success', 'Product updated successfully');
    // $name_product=$request->input("name_product");
    //     $unit_price=$request->input("unit_price");
    //     $url_images=$request->input("url_images");
      
    //     DB::table("products")->where('id',$id)->update([
    //         'name_product'=>$name_product,
    //         'unit_price'=>$unit_price,
    //         'url_images'=>$url_images,
           
        // ]);