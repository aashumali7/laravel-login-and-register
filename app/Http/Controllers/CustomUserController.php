<?php

namespace App\Http\Controllers;

use App\Models\CustomUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class CustomUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //we have to do Serverside valodation
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required|confirmed|min:8',
            'password_confirmation'=>'required'
        ]);
        //dd($request->all());
        // store data in the db 
        $data =$request->all(); //assciavity of the operator equal
        var_dump($data["password"]);
                         //Class::method
                         //scope resolution operator
        $data['password']= md5($data['password']);

        //dd($data);
        CustomUser::create($data);
        // dump all the incoming data
        return redirect("/register")->withSuccess("user registered Succesfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(CustomUser $customUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CustomUser $customUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CustomUser $customUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomUser $customUser)
    {
        //
    }
}
