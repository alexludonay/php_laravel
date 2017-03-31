@include("default")
<div class="container" style="margin-top: 100px">
    <div class="row ">
        <div class="col-md-6 col-md-push-3 enregistrement">
            <div class="box-header with-border">
                <h2 class="box-title ajouter_utilisateur text-center">Modification d'un utilisateur</h2>
                <hr>
            </div>
            <div class="box-body">
                {!! BootForm::open()->action(route("admin.users.update", array($user))) !!}
                {!! BootForm::hidden("_method")->value("put") !!}
                {!! BootForm::text("Nom","nom")->placeholder("Entrez le nom de l'utilisateur")->required(true)->defaultValue($user->nom) !!}
                {!! BootForm::text("Prénom","prenom")->placeholder("Entrez le prénom de l'utilisateur")->required(true)->defaultValue($user->prenom)!!}
                {!! BootForm::email("Email","email")->placeholder("Entrez l'email de l'utilisateur")->required(false)->defaultValue($user->email)!!}
                {!! BootForm::password("Mot de passe","password")->placeholder("Entrez le nom de l'utilisateur")!!}
                {!! BootForm::password("Confirmer le mot de passe","password_confirmation")->placeholder("Entrez de nouveau le mot de passe")!!}
                {!! BootForm::select('Role', 'role')->options(['student' => 'Etudiant', 'teacher' => 'Professeur', 'admin' => 'Administrateur'])->select('student') !!}
            </div>
            <input class="btn pull-right bouton" type="submit" value="Modifier"/>
            {!! BootForm::close() !!}
        </div>
    </div>
</div>
