<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
   public function __construct(){
      $this->middleware(['guest']) ;
   }

   public function index ()
   {
      return view('Auth/login');
   }
   public function store(Request $request){
      
      $this->validate($request, [
         'email' => 'required',
         'password' => 'required',
        ]);

       if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
          return back();
      }
      // ->with('status','Invalid Log In details')
      // auth()->attempt($request->only('email', 'password'));
       return redirect()->route('homefirst');
   }
   
}

