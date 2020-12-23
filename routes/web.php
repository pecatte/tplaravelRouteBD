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
    return view('index');
});
// --> accueil
Route::get('accueil', function () {
    return view('accueil');
});
// --> liste des livres
Route::get('liste', function () {
    return view('liste_livres');
});
// --> liste de mes livres
Route::get('meslivres', function () {
    return view('meslivres');
});
// --> ajouter d'un livre
Route::get('ajouter', function () {
    return view('ajout_livre');
});
// --> résultat de la recherche
Route::get('recherche', function () {
    return view('resultat_recherche');
});