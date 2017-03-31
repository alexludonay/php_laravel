@include('default')
    <div class="container text-center titre_classement_etudiants">
        <div class="row">
            <h1>Classement des Étudiants :</h1>
            <hr>
        </div>
    </div>

    @foreach($users as $key => $user)
        <!-- <div>{{$key+1}}</div> -->

@if ($key==0)
    <div class="container classement un">
        <div class="row notes">
            <div class="col-md-1 text-center numero_classement">
                {{$key+1}}
            </div>
        <div class="col-md-2 image_or"></div>
            <img src="img/uploads/avatar/{{ $user->avatar }}" alt="{{ $user->prenom }} {{ $user->nom }}" class="col-md-2 image">
        <div class="col-md-4 col-sm-6 etudiant-classement">


@elseif($key==1)
    <div class="container classement deux">
        <div class="row notes">
            <div class="col-md-1 text-center numero_classement">
                {{$key+1}}
            </div>
        <div class="col-md-2 image_argent"></div>
            <img src="img/uploads/avatar/{{ $user->avatar }}" alt="{{ $user->prenom }} {{ $user->nom }}" class="col-md-2 image">
        <div class="col-md-4 col-sm-6 etudiant-classement">


@elseif ($key==2)
    <div class="container classement trois">
        <div class="row notes">
            <div class="col-md-1 text-center numero_classement">
                {{$key+1}}
            </div>
        <div class="col-md-2 image_bronze"></div>
            <img src="img/uploads/avatar/{{ $user->avatar }}" alt="{{ $user->prenom }} {{ $user->nom }}" class="col-md-2 image">
        <div class="col-md-4 col-sm-6 etudiant-classement">

@else
    <div class="container classement">
        <div class="row notes">
            <div class="col-md-1 text-center numero_classement">
                {{$key+1}}
            </div>
            <img src="img/uploads/avatar/{{ $user->avatar }}" alt="{{ $user->prenom }} {{ $user->nom }}" class="col-md-2 image">
        <div class="col-md-5 col-sm-6 etudiant-classement">

    @endif
            <a href="{{ route("profil.show",$user->id) }}" >{{ $user->prenom }}</a>
            <h4>{{$user->nom }}</h4>
        </div>
        <div style="margin-top: 10px" class="col-md-2 col-sm-6 text-center note-classement">
            <h4>Notes :</h4>
            <h4 style="margin-top: 20px;">{{ $user->note }}</h4>
        </div>
        <li style="padding-left: 1px;" class="col-md-2 text-center">
            <ul>
                @if (Auth::check())
                    @if ($c_user->voted($user))

                        <li style="margin-top: 40px;"><a href="{{ route("resetnote",$user) }}">Modifier</a></li>

                    @else
                <li style="margin-top: 10px;"><a href="{{ route("notesplus",$user)}}"><i class="fa fa-angle-double-up fa-2x" aria-hidden="true"></i></a></li>
                <li><a href="{{ route("noteegal",$user)}}"><i class="fa fa-minus" aria-hidden="true"></i></a></li>
                <li><a href="{{ route("notesmoins",$user)}}"><i class="fa fa-angle-double-down fa-2x" aria-hidden="true"></i></a></li>
                    @endif
                    @endif


            </ul>
        </div>
    </div>
    <div>



    </div>

@endforeach




