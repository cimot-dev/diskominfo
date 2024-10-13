<?php

use App\Models\Post;
use App\Exports\PegawaiExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\berandaController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SinggelController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\PerangkatDaerahController;

// Route::get('/beranda', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/profil', function () {
    return view('profil');
})->name('profil');

// Route Profile
Route::get('/profil/tugas', function () {
    return view('tugas');
});
Route::get('/profil/nilai_budaya_kerja', function () {
    return view('budayakerja');
});
Route::get('/profil/visi&misiBupati ', function () {
    return view('visi');
});
Route::get('/profil/ProgramUnggulanBupati ', function () {
    return view('program');
});
Route::get('/profil/budayaMalu ', function () {
    return view('malu');
});
Route::get('/profil/akhlak', function () {
    return view('akhlak');
});

Route::get('/ppid', function () {
    return view('ppid');
});

Route::get('/berita/kategori', function () {
    return redirect('/berita');
})->name('posts.category');

Route::get('/', [berandaController::class, 'index']);
Route::get('/berita', [PostController::class, 'index'])->name('post.berita');
Route::get('/search', [PostController::class, 'search'])->name('search.posts');
Route::get('/beranda', [berandaController::class, 'index']);
Route::get('/berita/kategori/{category:slug}', [categoryController::class, 'PostCategory'])->name('posts.byCategory');
Route::get('/berita/{slug}', [SinggelController::class, 'singgel'])->name('Singgel');
Route::get('/profil/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
Route::get('/dokumen', [DokumenController::class, 'index'])->name('dokumen.index');
Route::get('/profil/perangkat-daerah', [PerangkatDaerahController::class, 'index'])->name('perangkat-daerah.index');

// Route untuk dokumen
Route::get('/dokumen/rpjpd', [DokumenController::class, 'showRpjpdDocuments'])->name('dokumen.rpjpd');
Route::get('/dokumen/rpjmd', [DokumenController::class, 'showRpjmdDocuments'])->name('dokumen.rpjmd');
Route::get('/dokumen/rkpd', [DokumenController::class, 'showRkpdDocuments'])->name('dokumen.rkpd');
Route::get('/dokumen/renstra-pd', [DokumenController::class, 'showRenstraPdDocuments'])->name('dokumen.renstra-pd');
Route::get('/dokumen/renja-pd', [DokumenController::class, 'showRenjaPdDocuments'])->name('dokumen.renja-pd');
Route::get('/dokumen/kajian', [DokumenController::class, 'showKajianDocuments'])->name('dokumen.kajian');

Route::get('/pegawai/export', function () {
    return Excel::download(new PegawaiExport, 'pegawai.xlsx');
});
