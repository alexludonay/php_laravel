<?php

namespace App\Http\Controllers\Front;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
        $user = User::findOrFail($id);

        $logauth = Auth::user()->id;
        if ( $id == $logauth) {
            return view("front/profils/edit", compact("user"));
        }
        else{
            return redirect(route("profil.show", $user))->with("danger", "Vous ne pouvez pas modifier ce profil !")->withInput();
        }
    }

    
    public function update(Request $request, $id)
    {
        //
    }

  
}
