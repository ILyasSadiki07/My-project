<?php
namespace App\Http\Controllers;

use DB;
use App\models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShowcartController extends Controller
{
  public function get_grain()
  {
     

    $data = DB::table('shooping_carts')
      ->select("id",'name_produit', 'unit_price', 'url_images')
      ->get();
    $sel = json_decode(json_encode($data), true);
    $count = DB::table('shooping_carts')->count();
    $totalPrice=0;
    return view("show", ['grains' => $sel , 'countP'=>$count,'totalPrice'=>$totalPrice]);
   
  }

}


