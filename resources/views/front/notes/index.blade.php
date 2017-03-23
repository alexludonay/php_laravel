
@include('front.commun.header')



@include('default')

    @foreach($users as $user)
<body>
<div class="container classement">
    <div class="row notes">
        <div class="col-md-2 image">
        </div>
        <div class="col-md-6 col-sm-6 etudiant-classement">
            <a href="#" >{{ $user->prenom }}</a>
            <h4>{{$user->nom }}</h4>
        </div>
        <div style="margin-top: 10px" class="col-md-2 col-sm-6 text-center note-classement">
            <h4>Notes :</h4>
            <h4 style="margin-top: 20px;">{{ $user->note }}</h4>
        </div>
        <div class="col-md-2 text-center">
            <ul>
                <li style="margin-top: 10px;"><a href="{{ route("notesplus",$user)}}"><i class="fa fa-angle-double-up fa-2x" aria-hidden="true"></i></a></li>
                <li><a href="{{ route("notesplus",$user)}}"><i class="fa fa-minus" aria-hidden="true"></i></a></li>
                <li><a href="{{ route("notesmoins",$user)}}"><i class="fa fa-angle-double-down fa-2x" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>

    <div class="col-md-6 col-sm-6 col-lg-6">
            <div>
                <h4>Notes :</h4>
                <ul>
                    <li>{{ $user->note }}</li>
                </ul>
            </div>
    </div>
    <div>
        @if (Auth::check())
          @if ($c_user->voted($user))
            <div><a href="{{ route("resetnote",$user) }}">Modifier</a></div>

        @else

        <li><a href="{{ route("notesplus",$user)}}"><input type="button" value="Plus" class="btn-primary"/></a></li>
                <li><a href="{{ route("noteegal",$user)}}"><input type="button" value="Egal" class="btn-primary"/></a></li>
        <li><a href="{{ route("notesmoins",$user)}}"><input type="button" value="Moins" class="btn-primary"/></a></li>
            @endif
        @endif

    </div>


@endforeach
</div>
</body>

