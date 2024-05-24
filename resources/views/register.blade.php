@extends('layouts.app')
@section("content")
        <h1 class='text-center mt-4'>Register Form <a href="{{route ('loginroute')}}">Go to Login page</a></h1>
        <form method='POST' action ="/user">
            @csrf
            <div class ='container'>
        <div class="mb-3">
            <label for="fullname" class="form-label">Full name</label>
            <input name='fullname' type="text" class="form-control" id="fullname" placeholder="">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input name='email' type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="inputpassword" class="form-label">Password</label>
            <input name='password' type='password'  class="form-control pass" id="inputpassword" placeholder="">
        </div>
        <div class="mb-3">
            <label for="cpassword" class="form-label">Confirm Password</label>
            <input name='cpassword' type='password' class="form-control cpass" id="cpassword" placeholder="">
        </div>
        <input type='Submit' onclick=' return aashish()' class='btn btn-primary'/>
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