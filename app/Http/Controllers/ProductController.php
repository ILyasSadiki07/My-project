<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = auth()->user()->products ;

        return view('grain' , compact('products'));
    }
}
