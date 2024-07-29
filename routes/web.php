<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfilSekolahController;
use App\Http\Controllers\SambutanController;
use App\Http\Controllers\SejarahController;
use App\Models\Berita;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profil', [HomeController::class, 'profil'])->name('profil');
Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');
Route::get('/berita', [HomeController::class, 'berita'])->name('berita');
Route::get('/profil/sejarah', [HomeController::class, 'sejarah'])->name('sejarah');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('admin/berita', [BeritaController::class, 'index'])->name('admin.berita');
    Route::get('admin/tambah-berita', [BeritaController::class, 'create'])->name('admin.berita.create');
    Route::post('admin/tambah-berita', [BeritaController::class, 'store'])->name('berita.store');
    
    Route::get('admin/edit-berita/{id}', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::put('/berita/{id}', [BeritaController::class, 'update'])->name('berita.update');
    Route::delete('/berita/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');
    
    Route::get('berita/{id}', [BeritaController::class, 'show'])->name('berita.show');
    
    Route::get('dashboard/profil', [ProfilSekolahController::class, 'index'])->name('profil.sekolah');
    Route::get('dashboard/profil-create', [ProfilSekolahController::class, 'create'])->name('profil.sekolah.create');
    Route::post('dashboard/profil-create', [ProfilSekolahController::class, 'store'])->name('profil.sekolah.store');
    
    Route::get('/profil-edit/{id}', [ProfilSekolahController::class, 'edit'])->name('profil.sekolah.edit');
    Route::put('/profil-edit/{id}', [ProfilSekolahController::class, 'update'])->name('profil.sekolah.update');
    
    // Route::get('/profil-sekolah/{id}', [ProfilSekolahController::class, 'show'])->name('profil.sekolah.show');
    Route::delete('/profil-sekolah/{id}', [ProfilSekolahController::class, 'destroy'])->name('profil.sekolah.delete');
    
    Route::get('admin/sambutan', [SambutanController::class, 'index'])->name('sambutan.index');
    Route::get('admin/sambutan-create', [SambutanController::class, 'create'])->name('sambutan.create');
    Route::post('admin/sambutan-create', [SambutanController::class, 'store'])->name('sambutan.store');
    Route::get('sambutan/{id}', [SambutanController::class, 'edit'])->name('sambutan.edit');
    Route::put('sambutan/{id}', [SambutanController::class, 'update'])->name('sambutan.update');
    Route::delete('sambutan/{id}', [SambutanController::class, 'destroy'])->name('sambutan.destroy');
    
    
    Route::get('dashboard/sejarah', [SejarahController::class, 'index'])->name('sejarah.index');
    Route::get('dashboard/sejarah-create', [SejarahController::class, 'create'])->name('sejarah.create');
    Route::post('dashboard/sejarah-create', [SejarahController::class, 'store'])->name('sejarah.store');
    Route::get('dashboard/sejarah-edit{id}', [SejarahController::class, 'edit'])->name('sejarah.edit');
    Route::put('dashboard/sejarah-edit{id}', [SejarahController::class, 'update'])->name('sejarah.update');
    Route::delete('sejarah/{id}', [SejarahController::class, 'destroy'])->name('sejarah.destroy');
    
    Route::get('dashboard/kontak', [KontakController::class, 'index'])->name('kontak.index');
    Route::post('kontaks', [KontakController::class, 'store'])->name('kontak.store');
    Route::delete('dashboard/kontak/{id}', [KontakController::class, 'destroy'])->name('kontak.destroy');
    
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
});

require __DIR__.'/auth.php';