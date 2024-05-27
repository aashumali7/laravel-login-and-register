@extends('layouts.app')
@section('content')
        <h1 class='text-center mt-4'>Login Form <a href="{{route ('registerroute')}}">Go to Register page</a></h1>
        @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif     
        <form method='POST' action ="/login">
            @csrf
            <div class ='container'>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input required type="email" name='email' value='' class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <label for="inputPassword5" class="form-label">Password</label>
        <input required type="password" name='password' id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
        <div class="form-text aashish">
        </div>
        <input type='Submit' value='Login' onclick=' return true()' class='btn btn-primary'/>
    </form>
@endsection            