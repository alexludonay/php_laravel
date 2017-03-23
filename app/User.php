<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    protected $table = 'users';
    protected $fillable = array("id", "nom", "prenom", "email", "password", "role","note");
    protected $hidden = array('password');
    public static $rules = array(
        "create" => array(
            'nom' => 'required|string|min:2',
            'prenom' => 'required|string|min:2',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:2|confirmed',
            'role' => 'string|min:2',
            'note' => 'string|min:2',
        ),
        "update" => array(
            'nom' => 'required|string|min:2',
            'prenom' => 'required|string|min:2',
            'email' => 'required|email',
            'password' => 'string|min:2',
            'role' => 'string|min:2',
            'note' => 'string|min:2',
        )
    );

    public function setPasswordAttribute($value)
    {
        $this-> attributes["password"] = Hash::make($value);
    }

   
    public function commentaires()
    {
        return $this->hasMany("App\Commentaire","user_id","id");
    }
    public function vote()
    {
        return $this->hasMany("App\Vote","voted_id","id");
    }
    public function isAdmin()
    {
        if (Auth::check() && Auth::user()->role=="admin")
        {
            return true;
        }
        return false;
    }
    public function voted($user){
        $c_user= Auth::user();
        $c_user->load("vote");
        $stillvote=false;
        foreach($c_user->vote()->get() as $vote)
        {
            if($vote->user_id == $user->id){
                $stillvote=true;
            }
        }
        return $stillvote;
    }

}
