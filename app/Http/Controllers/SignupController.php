<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SignupController extends Controller
{
    public function index (){
        return view('signup');
     }
     
     public function store(Request $request)
     {
       
       $this->validate($request, [
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required',
        'password' => 'required',
       ]);
        
       User::create([
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'email' => $request->email,
        'password' => $request->password,
       ]);

       auth()->attempt($request->only('email','password'));
       return redirect()->route('homefirst');
    }
       
}
