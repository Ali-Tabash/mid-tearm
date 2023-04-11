<?php

use App\Models\project;
use App\Http\Controllers\Projectcontroller;

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

Route::get('/create',[Projectcontroller::class,('create')]);
Route::get('dash',[Projectcontroller::class,('dash')]);
Route::get('expenses',[Projectcontroller::class,('expenses')]);
Route::get('expenses',[Projectcontroller::class,('expenses')]);
Route::post('stored',[Projectcontroller::class,('stored')]);
Route::post('delete/{id}',[Projectcontroller::class,('delete')]);
Route::post('update/{id}',[Projectcontroller::class,('update')]);


