@include('default')
@include("front.commun.alert")
<div> L'utilisateur que vous rechercher n'existe pas, rééssayer :</div>
<div class="col-sm-12 text-center">
    <h4 class="col-sm-12 text-center texte_accueil">Rechercher un candidat :</h4>
    {!! Form::open(['route' => 'search']) !!}
    {!! Form::text('query') !!}
    {!! Form::submit('Rechercher') !!}
    {!! Form::close() !!}

</div>