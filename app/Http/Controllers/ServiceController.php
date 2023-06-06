<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function index (){
    $userId = Auth::id();
    $count = DB::table('shooping_carts')
    ->where('shooping_carts.id_user', $userId)
    ->count();;
        
    return view("service", ['countP' => $count]);
    }
}   
