<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EventController;
use App\Models\Application;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;



Route::get('/form_create', function () {
    return view('form_create');
});

Route::get('/form_application', function () {
    return view('form_application');
});

Route::get('/', [EventController::class, 'list']);

Route::post('/', [EventController::class, 'list']);

Route::post('applications/{id}', [ApplicationController::class , 'create']);

Route::get('/event/{id}', [EventController::class, 'show']);

Route::get('/login', [LoginController::class, 'login']);
Route::post('/login-user', [LoginController::class, 'loginUser']);

Route::get('/form_application/applications/{id}', [ApplicationController::class , 'list']);

