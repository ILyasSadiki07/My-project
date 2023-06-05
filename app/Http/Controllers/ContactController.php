<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index (){

         $count = DB::table('shooping_carts')
        ->count();
            
        return view("contact", ['countP' => $count]);
    }
}
