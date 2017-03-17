<?php

namespace App\Http\Controllers\Front;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfilsController extends Controller
{
    
    public function index()
    {
        $users = User::get();
        return view("front/profils/index", compact("users"));
        
    }

    
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view("front/profils/show"  , compact("user"));
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

  
}
