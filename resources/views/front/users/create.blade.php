<!DOCTYPE html>
@extends("back/default")
@section("content")
    <div class="container" style="margin-top: 100px">
        <div class="row ">
            <div class="col-md-6 col-md-push-3 enregistrement">
                <div class="box-header with-border">
                    <h2 class="box-title ajouter_utilisateur">Enregistrer un nouveau utilisateur</h2>
                    <hr>
                </div>
                <div class="box-body">
                    {!! BootForm::open()->action(route("users.store")) !!}
                    {!! BootForm::text("Nom","nom")->placeholder("Entrez le nom de l'utilisateur")->required(true)!!}
                    {!! BootForm::text("Prénom","prenom")->placeholder("Entrez le prénom de l'utilisateur")->required(true)!!}
                    {!! BootForm::date('Date de Naissance',"birthday")->placeholder("Entrez la date de naissance de l'utilisateur") !!}
                    {!! BootForm::email("Email","email")->placeholder("Entrez l'email de l'utilisateur")->required(false)!!}
                    {!! BootForm::password("Mot de passe","password")->placeholder("Entrez le nom de l'utilisateur")->required(true)!!}
                    {!! BootForm::password("Confirmer le mot de passe","password_confirmation")->placeholder("Entrez de nouveau le mot de passe")->required(true)!!}
                    {!! BootForm::select('Role', 'role')->options(['student' => 'Etudiant', 'teacher' => 'Professeur', 'admin' => 'Administrateur'])->select('student') !!}
                </div>
                <input class="btn pull-right bouton" type="submit" value="Ajouter"/>
                {!! BootForm::close() !!}
            </div>
        </div>
    </div>

@stop