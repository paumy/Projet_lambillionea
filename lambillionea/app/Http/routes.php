<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', [
    'as'=>'accueil',
    'uses'=>'Controller@accueil'
]);

Route::get('/revue', [
    'as'=>'laRevue',
    'uses'=>'RevueController@liste'
]);

Route::get('/ajout-article', [
    'as'=>'ajoutArticle',
    'uses'=>'RevueController@ajouter'
]);

Route::get('/evenements', [
    'as'=>'lesEvenements',
    'uses'=>'EvenementController@agenda'
]);

Route::get('/panier', [
    'as'=>'monPanier',
    'uses'=>'PanierController@panier'
]);

Route::get('/administration', [
    'as'=>'admin',
    'uses'=>'EvenementController@connexion'
]);

Route::get('/add',[
    'as'=>'ajouterEvenement',
    'uses'=>'EvenementController@addEvenement'
]);

Route::post('/valid',[
    'as'=>'valid',
    'uses'=>'EvenementController@validEvenement'
]);

Route::get('/evenement/supprimer/{id}',[
    'as'=>'supprimerEvenement',
    'uses'=>'EvenementController@supprimerEvenement'
]);

Route::get('/evenement/modifier/{id}',[
    'as'=>'modifierEvenement',
    'uses'=>'EvenementController@modifierEvenement'
]);

Route::post('/update/{id}',[
    'as'=>'update',
    'uses'=>'EvenementController@updateEvenement'
]);
