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
    Route::resource("users","UsersController");
});
Route::group(array("namespace"=>"Front"), function() {
    Route::get("notes",
        array(
            "as"=> "notes",
            "uses"=>"NotesController@index"
        ));

    Route::resource("profil", "ProfilsController");
});