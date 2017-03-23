@include('front.commun.header')


    @foreach($users as $user)
   <div class="col-md-6 col-sm-6 col-lg-6">
    <h1>{{ $user->prenom }} {{ $user->nom }} </h1>
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