@include('default')

<h4 class="col-sm-12 text-center titre_accueil">Rechercher un candidat :</h4>
<div class="text-center">
{!! Form::open(['route' => 'admin.search']) !!}
{!! Form::text('query') !!}
{!! Form::submit('Rechercher') !!}
{!! Form::close() !!}
</div>
@foreach($users as $user)
    <div class="col-md-6 col-sm-12 col-lg-4  text-center profil-utilisateurs">
        <div class="image_profil center-block"></div>
        <a href="{!! route("profil.show", $user->id) !!}">{{ $user->prenom }}</a>
        <h4>{{ $user->nom }}</h4>
        <p>Note : {{ $user->note }}</p>
        <a href="{!! route("profil.show", $user->id) !!}"><input class="btn btn-default center-block" type="submit" value="Voir le Profil"/></a>
            <a href="{{ route("admin.users.edit",$user)}}"><input class="btn btn-primary" type="submit" value="Modifier"/></a>
            <a href="{{ route("admin.users.destroy",$user)}}"> <input type="submit" value="Supprimer" class="del btn btn-danger"/></a>

        </div>

@endforeach
