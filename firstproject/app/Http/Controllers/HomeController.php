<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home');
    }
    public function signup()
    {
        return view('signup');
    }
    
    public function signupstore(Request $request)
    {
        $user=new User;
        $user->name=$request->name;
        $user->username=$request->username;
        $user->password=$request->password;
        $user->email=$request->email;
        
        $user->save();
        return redirect()->route('User.index');
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }
}
