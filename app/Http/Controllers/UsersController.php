<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
 
  
  
    public function home()
    {
      return view('users.home');
    }
}
