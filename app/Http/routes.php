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

use App\Moveins;

use App\Task;

use App\Tours;

Route::get('/', function () {
    return view('client');
});


// // Route::get('/insert', function () {
// // 	Moveins::create(['clientName'=> 'Testy Testerson', 'building'=>'The Paramount']);
// // 	return 'move in data created';
// // });

// Route::get('/moveins', 'MoveinsController@view');
Route::resource('task', 'TaskController');

Route::resource('moveins','MoveinsController@index');





Route::get('/client', 'ClientController@index');

Route::post('/client', 'FormController@clients');


// Route::post('/task', 'FormController@tasks');

// Route::get('/moveins', 'MoveinsController@index');

// Route::post('/moveins', 'FormController@moveins');

Route::get('/invoices', 'InvoicesController@index');

Route::post('/invoices', 'FormController@invoices');

Route::get('/buildings', 'BuildingsController@index');

Route::get('/acctInfo', 'AcctInfoController@index');

Route::post('/acctInfo', 'FormController@acctInfo');

Route::auth();

Route::get('/home', 'HomeController@index');
