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
    $vista = view('layout/header') . view('welcome') . view('layout/footer');
    return $vista;
});
Route::get('/juegos/kof97', function () {
    $vista = view('layout/header') . view('/juegos/kof97') . view('layout/footer');
    return $vista;
});
Route::get('/juegos/kof98', function () {
    $vista = view('layout/header') . view('/juegos/kof98') . view('layout/footer');
    return $vista;
});
Route::get('/juegos/kof99', function () {
    $vista = view('layout/header') . view('/juegos/kof99') . view('layout/footer');
    return $vista;
});
Route::get('/juegos/kof2000', function () {
    $vista = view('layout/header') . view('/juegos/kof2000') . view('layout/footer');
    return $vista;
});
Route::get('/juegos/kof2001', function () {
    $vista = view('layout/header') . view('/juegos/kof2001') . view('layout/footer');
    return $vista;
});
Route::get('/juegos/kof2002', function () {
    $vista = view('layout/header') . view('/juegos/kof2002') . view('layout/footer');
    return $vista;
});
Route::get('/juegos/kof2003', function () {
    $vista = view('layout/header') . view('/juegos/kof2003') . view('layout/footer');
    return $vista;
});
Route::get('/personajes/sobresalientes', function () {
    $vista = view('layout/header') . view('/personajes/sobresalientes') . view('layout/footer');
    return $vista;
});
Route::get('/personajes/jefes', function () {
    $vista = view('layout/header') . view('/personajes/jefes') . view('layout/footer');
    return $vista;
});