<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Livewire\UsersTable;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])
->get('/users', UsersTable::class)
->name('users');


Route::middleware(['auth:sanctum', 'verified'])->get('/inscripcion', function () {
  return view('livewire.registration.registration');
})->name('inscripcion');

