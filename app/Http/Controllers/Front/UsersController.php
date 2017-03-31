<?php

namespace App\Http\Controllers\Front;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
    public function update(Request $request, $id)
    {
        $input = $request->all();

        if ($input["password"]== "")
        {
            unset($input["password"]);
            unset($input["password_confirmation"]);
        }
        $user_update=User::findOrFail($id);
        $this->validate($request,User::$rules["update"]);
        $status_create = $user_update->update($input);
        $c_user= Auth::user()->id;
        if($status_create)
        {
            return redirect(route('profil.show',$c_user))->with("success", "L'utilisateur à été modifié");
        }
        else{
            return redirect()->back()->with("danger", "Une erreur est survenue, merci de bien vouloir recommencer")->withInput();
        }
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
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view("front/users/edit",compact("user"));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $this->validate($request,\App\User::$rules["create"]);
        $status_create = User::create($input);



        if($status_create)
        {
            return redirect(route('login'))->with("success", "Le compte est créé");
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
