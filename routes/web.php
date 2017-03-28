<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//Connexion

Route::get("login",
    array(
     "as"=>"login",
     "uses" => "LoginsController@index"
    ));

Route::post("connexion",
    array(
        "as" => "connexion",
        "uses" => "LoginsController@connexion"
    ));

Route::get("deconnexion",
    array(
        "as"=> "deconnexion",
        "uses" => "LoginsController@deconnexion"
    ));


Route::group(array("prefix"=>"admin","namespace"=>"Admin","middleware"=>array("admin")), function()
{
    Route::resource("users","UsersController", array("as"=>"admin"));
    Route::post('search', ['as' => 'admin.search', 'uses' => 'UsersController@search'],array("as"=>"admin"));
});
Route::group(array("namespace"=>"Front"), function() {
    Route::get("notes",
        array(
            "as"=> "notes",
            "uses"=>"NotesController@index"
        ));
    Route::get("noteplus/{id}",
        array(
            "as"=> "notesplus",
            "uses"=>"NotesController@noteplus"
        ));
    Route::get("notemoins/{id}",
        array(
            "as"=> "notesmoins",
            "uses"=>"NotesController@notemoins"
        ));
    Route::get("noteegal/{id}",
        array(
            "as"=> "noteegal",
            "uses"=>"NotesController@noteegal"
        ));
    Route::get("resetnote/{user}",
        array(
            "as"=> "resetnote",
            "uses"=>"NotesController@resetnote"
        ));
    Route::post('search', ['as' => 'search', 'uses' => 'UsersController@search']);

    Route::resource("profil", "ProfilsController");

    Route::resource("utilisateur","UsersController");
    Route::post("profil",
        array(
            "as" => "profil.avatar",
            "uses" => "ProfilsController@update_avatar"
    ));

    Route::resource("users","UsersController");
    Route::resource("stats","StatsController");
});

Route::group(['middleware' => ['web']], function(){
    Route::resource('commentaires', 'CommentairesController');
});