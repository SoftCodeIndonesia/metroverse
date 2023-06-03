<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\Landing::class, 'index'])->name('home');
Route::get('/message/{data}', [App\Http\Controllers\Landing::class, 'successDirectMessage'])->name('message');
Route::post('/send', [App\Http\Controllers\Landing::class, 'sendEmail'])->name('send.email');