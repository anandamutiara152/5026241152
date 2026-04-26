<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

Route::get('/', function () {

    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <b>www.malasngoding.com</b>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('pert5', function () {
	return view('pertemuan5');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('pert5index', function () {
	return view('indexio');
});

Route::get('tugaspertemuan5', function () {
	return view('linktree');
});

Route::get('tugaspertemuan4', function () {
	return view('grid');
});

Route::get('tugaspertemuan3', function () {
	return view('thestoryof');
});

Route::get('pertemuan1', function () {
	return view('intro');
});

Route::get('news', function () {
	return view('news');
});

Route::get('news1', function () {
	return view('news1');
});

Route::get('responsive', function () {
	return view('responsive');
});
Route::get('template', function () {
	return view('template');
});



