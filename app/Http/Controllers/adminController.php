<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class adminController extends Controller
{
  public function __construct (){

    }

    public function index($user){

      $user = User::find($user);
      return view('backend.admin.admin',[
        'user'=> $user,
      ]);
    }

    public function profile($user){
      $user = User::findOrFail($user);

      return view('backend.admin.profile',[
        'user'=> $user,
      ]);
    }


    public function home($user){
      $user = User::findOrFail($user);
      return view('backend.admin.home',[
        'user'=> $user,
      ]);
    }

    public function lib($user){
      $user = User::findOrFail($user);
      return view('backend.admin.lib',[
        'user'=> $user,
      ]);
    }
    public function labs($user){
      $user = User::findOrFail($user);
      return view('backend.admin.labs',[
        'user'=> $user,
      ]);
    }
    public function departments($user){
      $user = User::findOrFail($user);
      return view('backend.admin.departments',[
        'user'=> $user,
      ]);
    }
    public function students($user){
      $user = User::findOrFail($user);
      return view('backend.admin.students',[
        'user'=> $user,
      ]);
    }
    public function documentation($user){
      $user = User::findOrFail($user);
      return view('backend.admin.documentation',[
        'user'=> $user,
      ]);
    }
}
