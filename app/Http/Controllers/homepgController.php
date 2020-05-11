<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homepgController extends Controller
{
  public function __construct (){
    {
        $this->middleware('guest')->except('logout');
    }


    }

  public function home(){

      return view('frontend.homepage');
    }

}
