<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomefirstController extends Controller
{
    
   public function index ()
   {
      
      $products = Product::get();
      return view('pages/homefirst')->with(compact('products'));
   }
}
