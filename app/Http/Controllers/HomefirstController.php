<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomefirstController extends Controller
{
    
   public function index ()
   {
      return view('pages/homefirst');
   }
}
