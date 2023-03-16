<?php

use Illuminate\Support\Facades\Route;

// REMEMBER IMPORTING ALL YOUR CONTROLLERS 
use App\Http\Controllers\SuperherosController;

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
})->name('welcome');

Route::get('/example', function(){
    $page_title = "Example View";
    return view('exampleview', compact('page_title'));
})->name('example');

Route::get('/heros', [SuperherosController::class, 'index'])->name('heros');
