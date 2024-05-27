@extends('layouts.app')
@section("content")
        <h1 class='text-center mt-4'>Register Form <a href="{{route ('loginroute')}}">Go to Login page</a></h1>
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong> {{$message}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif                   
        <form method='POST' action ="/user">
            @csrf
            <div class ='container'>
        <div class="mb-3">
            <label for="fullname" class="form-label">Full name</label>
            <input name='name' value="{{old('name')}}" type="text" class="form-control" id="fullname" placeholder="">
            @if($errors->has('name'))
            <div id="passwordHelpBlock" class="form-text err">
                    {{$errors->first('name')}}
            </div>
            @endif()
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input name='email' value="{{old('email')}}" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            @if($errors->has('email'))
            <div id="passwordHelpBlock" class="form-text err">
                    {{$errors->first('email')}}
            </div>
            @endif()
        </div>
        <div class="mb-3">
            <label for="inputpassword" class="form-label">Password</label>
            <input name='password' value="{{old('password')}}" type='password'  class="form-control pass" id="inputpassword" placeholder="">
            @if($errors->has('password'))
            <div id="passwordHelpBlock" class="form-text err">
                    {{$errors->first('password')}}
            </div>
            @endif()
        </div>
        <div class="mb-3">
            <label for="cpassword" class="form-label">Confirm Password</label>
            <input name='password_confirmation' value="{{old('password_confirmation')}}" type='password' class="form-control cpass" id="password_confirmation" placeholder="">
            @if($errors->has('password_confirmation'))
            <div id="passwordHelpBlock" class="form-text err">
                    {{$errors->first('password_confirmation')}}
            </div>
            @endif()
        </div>
        <input type='Submit' onclick=' return true()' class='btn btn-primary'/>
        </form>
        <script>
            //this is javascript code
            function aashish(){
                //Get the password value 
                var p = document.querySelector('.pass').value;
                console.log('p>>',p);

                var cp = document.querySelector('.cpass').value;
                console.log('cp>>',cp);

                if(p == cp){
                    return true
                }else{
                    alert('password and confirm password does not match')
                }

                //Get the cpassword value 

                //check both value 

                //If equal return true

                //else return false
                return false;
            }
        </script>
    
@endsection        