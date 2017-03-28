@include('default')
@foreach($users as $user)
    <div class="col-md-4 col-sm-12 text-center profil-utilisateurs">
        <div class="image_profil center-block"></div>
        <a href="{!! route("profil.show", $user->id) !!}">{{ $user->prenom }}</a>
        <h4>{{ $user->nom }}</h4>
        <p>Note : {{ $user->note }}</p>
    </div>

@endforeach