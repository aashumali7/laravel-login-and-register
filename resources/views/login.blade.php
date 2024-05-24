@extends('layouts.app')
@section('content')
        <h1 class='text-center mt-4'>Login Form <a href="{{route ('registerroute')}}">Go to Register page</a></h1>
        <form method='POST' action ="">
            @csrf
            <div class ='container'>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <label for="inputPassword5" class="form-label">Password</label>
        <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
        <div class="form-text aashish">
            Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
        </div>
        </form>
@endsection            