@include("default")
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center titre_accueil">
                <h1>Bienvenue sur How To Survive</h1>
                <hr>
            </div>
            <div class="col-sm-8 col-sm-offset-2 text-center texte_accueil">
                <p>On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même.</p>
            </div>
            <div class="col-sm-12 text-center rechercher">
                {!! Form::open(['route' => 'search']) !!}
                {!! Form::text('query') !!}
                {!! Form::submit('Rechercher') !!}
                {!! Form::close() !!}

            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center lien_classement">
                <h5 style="margin-bottom: 25px;" >Ou</h5>
                <a class="bordure2" href="{!! route("notes") !!}">Voir les classements</a>

            </div>
        </div>
    </div>

