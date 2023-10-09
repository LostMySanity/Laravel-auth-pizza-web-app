<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizza', function () {
    //getting data from the database pretend for now atleast
    $pizza = [['type' => 'Hawaiian', 'name' =>'veg pizza', 'price' => 10],
        ['type' => 'italian', 'name' =>'non-veg pizza', 'price' => 15],
        ['type' => 'Indian', 'name' =>'makahni pizza', 'price' => 10]];
    
    return view('pizza',['pizza'=> $pizza,'name' => request('name'),'age' => request('age')]);
});

Route::get('/pizza/{$id}', function($id) {
        return view('details',['id' => $id]);
});
