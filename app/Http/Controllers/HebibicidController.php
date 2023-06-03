<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Products;
use DB;

class HebibicidController extends Controller
{
  //public function index (){
  //  return view("/grain") ;
  //}
  public function index()
  {
    //$grains=Grains::all();
    //$grains=grain::orderBy('id','desc');

    //return view("/grain",['grains'=>$grains]);
  }

  /*public function get_grain(){
    $grains=products::all();
    $grains->sortBy('id');
    //return view("/grain",['grains'=>$grains]);
    return view(dd($grains));
  }*/
  /*public function get_grain(){
    $grains=Products::with('categorie')
     ->whereColumn('label_categorie','grains')
     ->get();
    return view(dd($grains));
  }*/
  public function get_herbecide()
  {
    $data = DB::table('products')
      ->join('Categories', 'products.categorie_id', '=', 'Categories.id')
      ->select('products.id', 'name_product', 'unit_price', 'url_images', 'label_categorie')
      ->where('label_categorie', '=', 'herbecides')
      ->get();
    $sel = json_decode(json_encode($data), true);
    $count = DB::table('shooping_carts')->count();

    return view("grain", ['grains' => $sel, 'countP' => $count]);
  }
}