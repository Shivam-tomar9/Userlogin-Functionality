<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Contact;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    
    public function account()
    {
      $user = Auth::user();
      return view('frontend.pages.account', compact('user'));
    }

   

   





  
   
}
