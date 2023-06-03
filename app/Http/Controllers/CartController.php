<?php
namespace App\Http\Controllers;
use DB;
use App\Models\CartModel;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\Shoopingcarts;

class CartController extends Controller
{
    public function addTocart(string $type, int $id)
    {

        $product = Products::find($id);


        $cartItem = new Shoopingcarts([
            'id_produit' => $id,
            'url_images' => $product->url_images,
            'name_produit' => $product->name_product,
            'unit_price' => $product->unit_price
        ]);


        $cartItem->save();
        return back();
    }
    public function destroy(string $type, int $id)
    {
        $shooping_carts = shoopingcarts::find($id);
        
        DB::table('shooping_carts')->where('id', $id)->delete();
        // $shooping_carts->delete();
        return back();
    }
    public function vider()
    {   
        DB::table('shooping_carts')->delete();
        // $shooping_carts->delete();
        return back();
    }
    
}
