@extends('back.default')
@section('content')
    {!! Html::style("css/all.css") !!}
   {!! BootForm::open()->action(route("connexion")) !!}
   <div class="container">
       <div class="row">
           <div class="col-sm-12 col-md-12 text-center se-connecter">
               <h2>Se connecter</h2>
               <hr>
           </div>
       </div>
       <div class="row">
           <div class="col-sm-6 col-sm-offset-3 la_connexion">
               <div class="form-group has-feedback">
                   <h4>Entrez votre adresse email :</h4>
                   <input type="text" class="form-control" placeholder="Votre email" name="email" value="{{ old("email") }}"/>
               </div>
               <div class="form-group has-feedback connexion_mdp">
                   <h4>Entrez votre mote de passe</h4>
                   <input type="password" class="form-control" placeholder="Mote de passe" name="password"/>
               </div>
               <div class="col-sm-12 checkbox_souvenir">
                   <label>
                       <input name="remerber" type="checkbox"> Se souvenir de moi
                   </label>
               </div>
               <div class="col-xs-10 col-sm-offset-1">
                   <input style="background-color: #3e62e4" type="submit" class="btn btn-primary btn-block btn-flat" value="Se connecter"/>
               </div>
               <div class="col-sm-12 text-center pas-inscrit">
                   <a href="#">Pas encore de compte ? Inscrivez-vous</a>
               </div>
           </div>
       </div>
       {!! BootForm::close() !!}
   </div>
@endsection

