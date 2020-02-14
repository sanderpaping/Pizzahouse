<?php

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
    return view('welcome');
});

Route::get('/pizzas', function () {

    $pizzas = [
        ['type' => 'hawaiian', 'base' => 'cheesy crust', 'price' => 5],
        ['type' => 'margarita', 'base' => 'garlic crust', 'price' => 10],
        ['type' => 'volcano', 'base' => 'thin and crispy', 'price' => 15]
    ];


    return view('pizzas', [
        'pizzas' => $pizzas,
        'name' => request('name'),
        'age' => request('age')
        ]);
});

Route::get('/pizzas/{id}', function ($id) {


    return view('details', [
            'id' => $id
        ]);
});