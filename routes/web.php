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

Route::get('/', function () {
  return view('home');
})->name('home');

Route::get('/comics', function () {
  $comics = config('comics');
  return view('comics', compact('comics'));
})->name('comics');

Route::get('/fumetto/{slug}', function ($slug) {

  $comics = config('comics');
  $comicsFiltered = array_filter($comics, fn($fumetto) => $fumetto['slug'] === $slug);

  $fumetto = $comicsFiltered[array_key_first($comicsFiltered)];

  return view('fumetto', compact('fumetto'));
})->name('fumetto');


Route::get('/nopage', function () {
  return view('nopage');
})->name('#');
