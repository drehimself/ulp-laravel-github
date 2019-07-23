<?php

use GrahamCampbell\GitHub\Facades\GitHub;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return GitHub::me()->organizations();

    // return GitHub::user()->show('drehimself');

    // return GitHub::user()->following('drehimself');

    // return GitHub::user()->followers('drehimself');

    // return GitHub::user()->starred('drehimself');

    return GitHub::repo()->commits()->all('drehimself', 'laravel-ecommerce-example', array('sha' => 'master'));
});
