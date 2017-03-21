<body>
<div class="profile-title">
    @if (Auth::user()->id == $user->id)
       <li><a href="{!! route("profil.edit", $user->id) !!}" class="bordure hov">Modifier</a></li>
        @endif
        <h1>Profil de {{ $user->prenom }}</h1>
</div>
<div class="profil">
    <div class="col-md-2">
        <img src="../../assets/utilisateur-defaut.jpg" alt="photo">
        <div>
            <h4>Notes :</h4>
            <ul>
                <li>{{ $user->note }}</li>
            </ul>
        </div>
    </div>
    <div class="col-md-7">
        <p>{{ $user->nom , $user->prenom }}</p>
        <p>{{ $user->mail }}</p>
        <p>Description : Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
</div>
@if (Auth::guest())
    <p>Veuillez vous connecter pour pouvoir laisser un commentaire</p>
@else



    <div class="box-body col-md-6">
        {!! BootForm::open()->action(route("commentaires.store")) !!}
        {!! BootForm::textarea("Commentaire","content")->placeholder("Votre commentaire : ") !!}
        {!! BootForm::hidden("auteur")->value(Auth::user()->nom) !!}
        {!! BootForm::hidden("user_id")->value($user->id) !!}


        <input class="btn btn-primary pull-right" type="submit" value="Commenter"/>
        {!! BootForm::close() !!}

    </div>


@endif

@foreach($user->commentaires as $commentaire)
    {{$commentaire->auteur}} - {{$commentaire->content}}

    <br />

    @if (!Auth::guest())
        @if(Auth::user()->nom==$commentaire->auteur)
            <a href="{{route("commentaires.edit", $commentaire)}}" ><input class="" type="submit" value="Modifier"/></a>
            {!! BootForm::open()->action(route("commentaires.destroy", $commentaire))->style("display:inline") !!}
            {!! BootForm::hidden("_method")->value("delete") !!}
            <input class="" type="submit" value="Supprimer"/>
            {!! BootForm::close() !!}
            <br />
        @endif
    @endif
@endforeach
</body>
</html>
