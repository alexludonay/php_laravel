@include('default')

<div class="col-sm-6 col-sm-offset-3 text-center rechercher">
    <form method="POST" id="form_recherche" action="{{route('search')}}">
        <div class="form-group">
            <input type="hidden" name= "_token" value="{{csrf_token()}}"/>
            <label for="rechercher" class="sr-only">Rechercher :</label>
            <input type="text" name="query" class="form-control" id="espace_recherche" placeholder="Qui recherchez-vous ?" required="">
        </div>
        <button type="submit" id="bouton-rechercher"><i class="fa fa-search visible-xs" aria-hidden="true"></i><span class="hidden-xs">Rechercher</span></button>
    </form>
<h1 class="titre_accueil text-center"> Retrouvez tous les candidats : </h1>
    </div>
@foreach($users as $user)
    <div class="col-md-4 col-sm-12 text-center profil-utilisateurs">
        <div class="image_profil center-block"></div>
        <a href="{!! route("profil.show", $user->id) !!}">{{ $user->prenom }}</a>
        <h4>{{ $user->nom }}</h4>
        <p>Note : {{ $user->note }}</p>
            <a href="{{ route("profil.show", $user->id)}}"><input class="btn btn-success center-block" type="submit" value="En savoir plus"/></a>
    </div>

@endforeach