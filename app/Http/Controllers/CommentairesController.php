<?php

namespace App\Http\Controllers;

use App\Commentaire;
use Illuminate\Http\Request;

class CommentairesController extends Controller
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $this->validate($request, Commentaire::$rules["create"]);
        $status_create = Commentaire::create($input);
        if($status_create){
            return redirect(route('profil.index', $status_create))->with("success", "le commentaire a été ajouté.");
        }
        else{
            return redirect()->back()->with("danger", "Une erreur est survenue")->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $commentaire = Commentaire::findOrFail($id);
        return view("front/commentaires/edit", compact("commentaire"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $commentaire_update = Commentaire::findOrFail($id);
        $this->validate($request, Commentaire::$rules["update"]);
        $status_create = $commentaire_update->update($input);
        if($status_create){
            return redirect(route('profil.index', $status_create))->with("success", "le commentaire a été modifié.");
        }
        else{
            return redirect()->back()->with("danger", "Une erreur est survenue")->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $count = Commentaire::destroy($id);
        if($count == 1){
            return redirect()->back()->with("success","Supprimé");
        }
        else{
            return redirect()->back()->with("danger","Erreur");
        }
    }
}
