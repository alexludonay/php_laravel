@include('front.commun.header')
    @foreach($users as $user)
    <div class="col-md-4 col-sm-12 text-center">
        <div class="image"></div>
        <h3>{{ $user->prenom }}</h3>
        <h4>{{ $user->nom }}</h4>
        <p>Note : {{ $user->note }}</p>
        <a href="mailto:{{ $user->mail }}">{{ $user->mail }}</a>
    </div>

    @endforeach