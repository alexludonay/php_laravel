@include("default")
<div class="container page_profil">

    @if (Auth::check() and Auth::user()->role=="admin")
        <a href="{{ route("admin.users.edit",$user)}}"><input class="btn btn-success pull-left" style="position: fixed;" type="submit" value="Modifier le profil de {{ $user->prenom }} "/></a>
    @endif
    <div class="row centre_image_profil text-center">
        <img src="../img/uploads/avatar/{{ $user->avatar }}" alt="{{ $user->prenom }} {{ $user->nom }}" class="image_profil_seul">
        @if (Auth::user()->id == $user->id)
            <form enctype="multipart/form-data" action="{{ route('profil.avatar') }}" method="POST">
                <label for="">Update profile image</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
        @endif

        <h5 style="margin-top: 290px;">Profil de {{ $user->prenom }}</h5>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>Profil de {{ $user->prenom }}</h2>
        </div>
    </div>
    <div style="margin-top: 50px;" class="row">
        <div class="col-md-6 col-md-offset-3">
           <h4>Informations :</h4>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3 description">
            <h5>Nom de l'étudiant :  {{ $user->prenom }}</h5>
            <h5>Prénom de l'étudiant :  {{ $user->nom }}</h5>
            <h5>Mail de l'étudiant :  {{$user->mail }}</h5>
            <br>
            <h4>Description :</h4>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            @if (Auth::check() and Auth::user()->id == $user->id)
                <a href="{{ route("admin.users.edit",$user)}}"><input class="btn btn-primary" type="submit" value="Modifier"/></a>
            @endif

        </div>
    </div>


</div>


        </div>

@if (Auth::guest())
    <div class="text-center">
        <p style="font-weight: bold">Veuillez vous connecter pour pouvoir laisser un commentaire</p>
        <a href="{!! route("login") !!}"><input class="btn btn-primary " type="submit" value="Se connecter"/></a>
        <a href="{!! route("users.create") !!}"><input class="btn btn-success " type="submit" value="S'inscrire"/></a>
    </div>
@else



    <div class="col-md-4 col-md-offset-4 commentaire">
        {!! BootForm::open()->action(route("commentaires.store")) !!}
        {!! BootForm::textarea("","content")->placeholder("Votre commentaire : ") !!}
        {!! BootForm::hidden("auteur")->value(Auth::user()->nom) !!}
        {!! BootForm::hidden("user_id")->value($user->id) !!}


        <input class="btn pull-right bouton" type="submit" value="Commenter"/>
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


