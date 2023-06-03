<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index (){
        $count = DB::table('shooping_carts')->count();
            
        return view("index", ['count' => $count]);
        }
}
