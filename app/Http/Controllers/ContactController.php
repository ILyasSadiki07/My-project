<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index (){
        $userId = Auth::id();
         $count = DB::table('shooping_carts')
         ->where('shooping_carts.id_user', $userId)
         ->count();
            
        return view("contact", ['countP' => $count]);
    }
}
