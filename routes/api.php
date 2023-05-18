<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authentication ; 
use App\Http\Controllers\Clients ; 
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Authentication 

Route::post('/toggle' , [authentication::class , 'toggle'])->name('toggle') ; 

Route::post('/signin' , [authentication::class , 'signin'])->name('signin') ; 

Route::post('/signup' , [authentication::class , 'signup'])->name('signup') ; 

Route::post('/signout' , [authentication::class , 'signout'])->name('signout') ; 

// Client Requests


Route::post('/refresh_contact' , [Clients::class , 'refresh_contact']) ; 

Route::post('/refresh_chat' , [Clients::class , 'refresh_chat']) ; 

Route::post('/chat_with' , [Clients::class , 'chat_with']) ; 

Route::post('/close' , [Clients::class , 'close']) ; 

Route::post('/message' , [Clients::class , 'message']) ; 

Route::post('/search_contact' , [Clients::class , 'search_contact']) ; 
