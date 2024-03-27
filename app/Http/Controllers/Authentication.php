<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class Authentication extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function doLogin(Request $request)
    {
        // try{
            $request->validate([
                'email'=> 'required | email',
                'password'=> 'required'
            ]);

            $data = $request->all();    
            $cre = [
                'email' => $data['email'],  
                'password' => $data['password'], 
            ];
            if(Auth::attempt($cre)){
                return  redirect('/admin/home')->with('sucsess_login','login sucesssfuly');
            }
            else{
                return redirect()->back()->with('error','Invalid Credentials');
            }
        // }catch(Exception $e){
        //    return $e;
        // }
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
