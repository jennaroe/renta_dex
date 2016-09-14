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

use App\Commission;

use App\Task;

use App\Tours;

use App\Clients;

Route::get('/', function () {
    return view('client');
});

Route::resource('clients', 'ClientsController');

Route::resource('task', 'TaskController');

Route::resource('tours', 'ToursController');

Route::resource('commissions','CommissionController');





// Route::get('/client', 'ClientController@index');

// Route::post('/client', 'FormController@clients');


Route::get('/invoices', 'InvoicesController@index');

Route::post('/invoices', 'FormController@invoices');

Route::get('/buildings', 'BuildingsController@index');

Route::get('/acctInfo', 'AcctInfoController@index');

Route::post('/acctInfo', 'FormController@acctInfo');

Route::auth();

Route::get('/home', 'HomeController@index');
