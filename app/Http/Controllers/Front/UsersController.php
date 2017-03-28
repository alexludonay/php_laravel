<?php

namespace App\Http\Controllers\Front;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("front/users/create");
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $this->validate($request,\App\User::$rules["create"]);
        $status_create = User::create($input);



        if($status_create)
        {
            return redirect(route('users.index', $status_create))->with("success", "Le compte est créé");
        }
        else{
            return redirect()->back()->with("danger", "Une erreur est survenue, merci de bien vouloir recommencer")->withInput();
        }

    }

    public function search(Request $request)
    {
        $query = $request->get('query');

        $users = User::where('prenom', 'LIKE', "%$query%")
            ->orWhere('nom', 'LIKE', "%$query%")
            ->get();

        if($users->count()==0)
        {
            return view('front/profils/unknown', compact('users'));}
        else{
        return view('front/profils/index', compact('users'));}
    }
}
