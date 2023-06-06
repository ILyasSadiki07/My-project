<?php
namespace App\Http\Controllers;
use DB;
use App\Models\Commande;
use App\Models\Products;
use App\Models\CartModel;
use Illuminate\Http\Request;
use App\Models\Shoopingcarts;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    
    public function addTocart(string $type, int $id)

    {
        if (!Auth::check()) {
            return view('auth.login');
        }
        $product = Products::find($id);
    
        $userId = Auth::id();
         // Retrieve the user ID
    
        $cartItem = new Shoopingcarts([
            'id_user' => $userId, // Assign the user ID
            'id_produit' => $id,
            'url_images' => $product->url_images,
            'name_produit' => $product->name_product,
            'unit_price' => $product->unit_price
        ]);
    
        $cartItem->save();
        return back();
    }
    public function commande(Request $request)
    {
       
        

        $userId = Auth::id();
        $email_user = Auth::user()->email;
        $shoppingCartItems = Shoopingcarts::where('id_user', $userId)->get();
        foreach ($shoppingCartItems as $cartItem) {
            $commandeItem = new Commande([
                'id_produit' => $cartItem->id_produit,
                'name_product' => $cartItem->name_product,
                'email_user' => $email_user,
                'id_user' => $userId,
                'total_price_produit' => $cartItem->unit_price * $cartItem->quantity,
            ]);

        $commandeItem->save();
            
        }
        
        // Clear the shopping cart for the user
        Shoopingcarts::where('id_user', $userId)->delete();
    
        return view("valideCommand");
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
