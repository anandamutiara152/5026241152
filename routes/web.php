<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\NilaiKuliahController;
use App\Http\Controllers\KeranjangBelanjaDBController;

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

Route::get('/pegawainama/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);
//blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//route CRUD
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

//Route CRUD Siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

//Route CRUD Nilai Kuliah
Route::get('/nilaikuliah', [NilaiKuliahController::class, 'index']) ->name('nilaikuliah.index');
Route::get('/nilaikuliah/tambahdata', [NilaiKuliahController::class, 'create']) ->name('nilaikuliah.create');
Route::post('/nilaikuliah/store', [NilaiKuliahController::class, 'store']) ->name('nilaikuliah.store');

// CRUD Tabel Keranjang Belanja
Route::get('/keranjang-belanja', [KeranjangBelanjaDBController::class, 'index']);
Route::get('/keranjang-belanja/beli', [KeranjangBelanjaDBController::class, 'beli']);
Route::post('/keranjang-belanja/store', [KeranjangBelanjaDBController::class, 'store']);
Route::get('/keranjang-belanja/batal/{id}', [KeranjangBelanjaDBController::class, 'batal']);

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




