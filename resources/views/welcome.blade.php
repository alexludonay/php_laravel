
<!DOCTYPE html>
@include("default")
<html lang="fr">
    <head>
        {!! Html::style("css/all.css") !!}
        {!! Html::style("css/app.css") !!}
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>How To Survive</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center titre_accueil">
                <h1>Bienvenue sur How To Survive</h1>
                <hr>
            </div>
            <div class="col-sm-12 text-center">
                <h4 class="col-sm-12 text-center texte_accueil">Rechercher un candidat :</h4>
                    {!! Form::open(['route' => 'search']) !!}
                    {!! Form::text('query') !!}
                    {!! Form::submit('Rechercher') !!}
                    {!! Form::close() !!}

                <form method="POST" action="{{route('search')}}">
                    <div class="form-group">
                        <input type="hidden" name= "_token" value="{{csrf_token()}}"/>
                        <label for="rechercher" class="sr-only">Rechercher :</label>
                        <input type="text" id="rechercher" name="query" class="form-control" placeholder="Quel camarade recherchez-vous ?" required="">
                    </div>
                    <button type="submit" class="bouton-rechercher"><i class="fa fa-search visible-xs" aria-hidden="true"></i><span class="hidden-xs">Rechercher</span></button>
                </form>



           </div>
            <div class="col-sm-8 col-sm-offset-2 text-center texte_accueil">
                <p>On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center voir_classement">
                <h2>Voir les classements :</h2>
            </div>
            <div class="col-sm-12 text-center lien_classement">
                <a class="bordure2" href="{!! route("notes") !!}">Étudiants</a>
                <a class="bordure2" href="#">Professeurs</a>
            </div>
        </div>
    </div>
    </body>
</html>