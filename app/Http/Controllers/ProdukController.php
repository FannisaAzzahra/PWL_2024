<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function food(){ 
        return view('pos.food-beverage') ;
    } 
    public function baby(){ 
        return view('pos.baby-kid') ;
    } 
    public function homeCare(){ 
        return view('pos.home-care') ;
    } 
    public function beauty(){ 
        return view('pos.beauty-health') ;
    } 
}