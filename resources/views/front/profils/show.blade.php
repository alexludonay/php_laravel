@include("default")
<div class="container">
    <div class="row">
        <div class="col-md-12 image_profil_seul"></div>
        <h2>Profil de {{ $user->prenom }}</h2>
    </div>
    <div class="row">
        <div class="col-md-10">
           <h4>Description</h4>
            <hr>
        </div>
        <div class="col-md-10">
            <h5>{{ $user->prenom, $user->nom }}</h5>
            <p>Email : {{$user->mail }}</p>
            Description : Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            @if (Auth::user()->id == $user->id)
                <a href="{!! route("profil.edit", $user->id) !!}" class="bordure hov">Modifier</a>
            @endif
        </div>
    </div>


</div>