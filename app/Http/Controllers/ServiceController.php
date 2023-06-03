<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index (){
    $count = DB::table('shooping_carts')->count();
        
    return view("service", ['countP' => $count]);
    }
}
