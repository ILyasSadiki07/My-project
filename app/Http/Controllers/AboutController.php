<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AboutController extends Controller
{
    public function index (){
        $count = DB::table('shooping_carts')->count();
            
        return view("about", ['countP' => $count]);
        }
}
