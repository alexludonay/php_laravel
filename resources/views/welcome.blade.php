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
            <div class="col-sm-6 col-sm-offset-3 text-center rechercher">
                <form method="POST" id="form_recherche"  action="{{route('search')}}">
                    <div class="form-group">
                        <input type="hidden" name= "_token" value="{{csrf_token()}}"/>
                        <label for="rechercher" class="sr-only">Rechercher :</label>
                        <input type="text" name="query" class="form-control" id="espace_recherche" placeholder="Qui recherchez-vous ?" required="">
                    </div>
                    <button type="submit" id="bouton-rechercher"><i class="fa fa-search visible-xs" aria-hidden="true"></i><span class="hidden-xs">Rechercher</span></button>
                </form>
            </div>
        <div class="row">
            <div class="col-sm-12 text-center lien_classement">
                <h5 style="margin-bottom: 25px;" >Ou</h5>
                <a class="bordure2" href="{!! route("notes") !!}">Voir les classements</a>

            </div>
        </div>
    </div>

