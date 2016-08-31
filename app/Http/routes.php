<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
 */

$app->get('/', 'PageController@index');
$app->post('/', ['uses' => 'AuthenticationController@login']);

//$app->group(['middleware' => 'auth'], function ($app) {
//    $app->post('/notes', ['uses' => 'NotesController@getNotes']);
//});

//$app->get('/', 'PageController@index');
//$app->post('/','AuthenticationController@login');
$app->get('/mknotes', function() {
    $user = App\User::find(1);


    $user->notes()->create(['title' => 'asdf2', 'content' => 'asdfasdfasdfasdf']);
   //dd($user->notes()->firstOrFail());
});


$app->get('/notes', 'NotesController@getNotes');
$app->get('/note/create','NotesController@create');
$app->post('note/create','NotesController@postNote');

$app->get('note/{id}/delete','NotesController@deleteNote');

$app->get('/note/{id}/', 'NotesController@editNote');
$app->post('/note/{id}/', 'NotesController@updateNote');