<div class="box-body col-md-6">
    {!! BootForm::open()->action(route("commentaires.update", array($commentaire))) !!}
    {!! BootForm::hidden("_method")->value("put") !!}
    {!! BootForm::open()->action(route("commentaires.store")) !!}
    {!! BootForm::text("Contenu","content")->placeholder($commentaire->nom)->required(true)->defaultValue($commentaire->content) !!}
    {!! BootForm::hidden("auteur")->value($commentaire->auteur) !!}
    {!! BootForm::hidden("user_id")->value($commentaire->user_id) !!}

    <input class="btn btn-primary pull-right" type="submit" value="Modifier"/>
    {!! BootForm::close() !!}

</div>