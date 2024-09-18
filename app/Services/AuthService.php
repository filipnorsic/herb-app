<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class authService
{
 public function register(FormRequest $request)
 {
  // Register user
  $data=$request->safe(['first_name','last_name','email','password']);
  $user=User::create($data);


  Auth::login($user);


  return redirect()->route('dashboard');
 }


 public function postLogin(FormRequest $request)
 {
  // Login user
  $credentials=$request->safe(['email','password']);
  if(Auth::attempt($credentials)){
    $request->session()->regenerate();
   return redirect()->route('dashboard');
  }

  return back()->withErrors(['credentials'=>'Invalid credentials']);
 }

    public function logout(Request $request)
    {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('home');
    }
}


