<?php

namespace App\Http\Controllers\Front;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;


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
        return view("front/profils/show", compact("user"));
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

    


    public function update_avatar(Request $request) {

        // Handle the user upload of avatar
        if($request->hasFile('avatar')){

            $avatar = $request->file('avatar');
            $filename = time() . "." . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(230,270)->save( public_path("img\uploads\avatar\\" . $filename) );

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        return redirect(route("profil.show", $user))->with("success", "Votre image a bien été ajoutée")->withInput();
    }

  
}
