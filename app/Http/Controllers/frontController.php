<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontController extends Controller
{

  public function __construct (){

    }

    public function index(){
      return view('frontend.libraryindexes.index');
    }

    public function labs(){
      return view('frontend.libraryindexes.labs');
    }

    public function departments(){
      return view('frontend.libraryindexes.departments');
    }

    public function students(){
      return view('frontend.libraryindexes.students');
    }

    public function links(){
      return view('frontend.libraryindexes.links');
    }

}
