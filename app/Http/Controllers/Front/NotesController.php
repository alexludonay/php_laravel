<?php

namespace App\Http\Controllers\Front;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();
        return view("front/notes/index" , compact("users"));
    }
    

    public function noteplus($id){

        $user_update=User::findOrFail($id);
        $noteactuel = $user_update->note;
        DB::update('update users set note = ?+1 where id = ?', [$noteactuel,$id]);
        return redirect(route("notes"));
    }
    public function notemoins($id){
        $user_update=User::findOrFail($id);
        $noteactuel = $user_update->note;
        DB::update('update users set note = ?-1 where id = ?', [$noteactuel,$id]);
        return redirect(route("notes"));
    }

}
