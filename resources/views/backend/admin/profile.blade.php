@extends('layouts.adminmaster')

@section('content')
<section class="content-header">

  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Profile</li>
  </ol>
  <div class="container">
    <div class="jumbotron">
      <h1 class="display-4">{{ $user->name }} {{ $user->profile->username }} </h1>
      <p class="lead">{{ $user->profile->staffId }}</p>
      <hr class="m-y-md">
      <p>{{ $user->profile->description ?? 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.' }}</p>
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="#" role="button">Edit Profile</a>
      </p>
    </div>
  </div>
</section>

@endsection
