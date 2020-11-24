<?php

// use Illuminate\Support\Facades\Route;

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
Route::any('products/search','RepositorioController@search')->name('products.search');
Route::resource('products','RepositorioController');//->middleware(['auth','check.is.admin']);
Route::resource('professor','ProfessorController');
Route::resource('curso','CursoController');

Route::get('/login', function () {
    return "Login";
})->name('login');
Route::get('/ler_PDF',function(){
    return view('admin.pages.pdf');
});
//remover isso
Route::get('/list','RepositorioController@list');
Route::get('/ver_curso','RepositorioController@ver_curso');
Route::get('/ver_arquivo','RepositorioController@ver_arquivo');
Route::get('/perfil_egresso','RepositorioController@perfil_egresso');
Route::get('/teste','RepositorioController@teste');

Auth::routes(['register' => false]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');