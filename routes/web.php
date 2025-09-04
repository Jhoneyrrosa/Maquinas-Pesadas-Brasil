<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato', [ContatoController::class, 'showForm']);

Route::post('/contato', [ContatoController::class, 'processForm']);
