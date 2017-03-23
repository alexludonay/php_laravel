<?php

namespace App\Http\Controllers\Front;
use App\User;

use App\Vote;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
        $c_user= Auth::user();
        return view("front/notes/index" , compact("users","c_user"));
    }

    public function noteplus($id){
        $user_update=User::findOrFail($id);
        $c_user= Auth::user();
        $notemoinsun = $user_update->update(array(
            'note'=>$user_update->note+1));
        $vote= $c_user->vote()->create(array(
            'user_id'=>$id,
            'voted_id'=>$c_user->id,
            'value'=>1
        ));
        return redirect(route("notes"));
    }
    public function noteegal($id){
        $user_update=User::findOrFail($id);
        $c_user= Auth::user();
        $notemoinsun = $user_update->update(array(
            'note'=>$user_update->note));
        $vote= $c_user->vote()->create(array(
            'user_id'=>$id,
            'voted_id'=>$c_user->id,
            'value'=>0
        ));
        return redirect(route("notes"));}

    public function notemoins($id)
    {
        $user_update = User::findOrFail($id);
        $c_user = Auth::user();
        $notemoinsun = $user_update->update(array(
            'note' => $user_update->note - 1));
        $vote = $c_user->vote()->create(array(
            'user_id' => $id,
            'voted_id' => $c_user->id,
            'value' => -1,
        ));
        return redirect(route("notes"));
    }
        
        public function resetnote($id){
            $c_user= Auth::user();
            $user = User::findOrFail($id);

            $vote = Vote::where("user_id", $user->id)->where("voted_id", $c_user->id)->delete();

        }
    
    
    
    
}
