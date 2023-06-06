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
     
    $userId = Auth::id();
    $data = DB::table('shooping_carts')
      ->select("id",'name_produit', 'unit_price', 'url_images')
      ->where('shooping_carts.id_user', $userId)
      ->get();
    $sel = json_decode(json_encode($data), true);
    $count = DB::table('shooping_carts')
    ->where('shooping_carts.id_user', $userId)
    ->count();
    $totalPrice=0;
    return view("show", ['grains' => $sel , 'countP'=>$count,'totalPrice'=>$totalPrice]);
   
  }

}


