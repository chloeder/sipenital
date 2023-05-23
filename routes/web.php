<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return redirect()->route('login');
});
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'login_view'])->name('login');
    // Route::get('/register', [AuthController::class, 'register_view'])->name('register');
});
Route::post('/login', [AuthController::class, 'login_auth'])->name('login.auth');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('dashboard.admin');

    Route::get('/admin/personil', [AdminController::class, 'view_personil'])->name('admin.personil');
    Route::get('/admin/personil/{id}', [AdminController::class, 'detail_personil'])->name('admin.personil.detail');
    Route::put('/admin/personil/{id}', [AdminController::class, 'update_personil'])->name('admin.personil.update');

    Route::post('/admin/personil/import', [AdminController::class, 'import_personil'])->name('admin.personil.import');

    Route::get('/admin/satker', [AdminController::class, 'view_satker'])->name('admin.satker');
    Route::get('/admin/satker/struktur/{id}', [AdminController::class, 'view_struktur'])->name('admin.struktur');

    Route::get('/admin/agama/islam', [AdminController::class, 'view_agama_islam'])->name('admin.agama.islam');
    Route::get('/admin/agama/protestan', [AdminController::class, 'view_agama_protestan'])->name('admin.agama.protestan');
    Route::get('/admin/agama/katolik', [AdminController::class, 'view_agama_katolik'])->name('admin.agama.katolik');
    Route::get('/admin/agama/hindu', [AdminController::class, 'view_agama_hindu'])->name('admin.agama.hindu');
    Route::get('/admin/agama/buddha', [AdminController::class, 'view_agama_buddha'])->name('admin.agama.buddha');
    Route::get('/admin/agama/khonghucu', [AdminController::class, 'view_agama_khonghucu'])->name('admin.agama.khonghucu');
    Route::get('/admin/agama/lainnya', [AdminController::class, 'view_agama_lainnya'])->name('admin.agama.lainnya');



    Route::get('/admin/riwayat/riwayat-personil', [AdminController::class, 'view_riwayat_personil'])->name('admin.daftar.riwayat.personil');
    Route::get('/admin/riwayat/riwayat-pensiun', [AdminController::class, 'view_riwayat_pensiun'])->name('admin.daftar.riwayat.pensiun');
    Route::get('/admin/riwayat/riwayat-sakit', [AdminController::class, 'view_riwayat_sakit'])->name('admin.daftar.riwayat.sakit');
    Route::get('/admin/riwayat/riwayat-bermasalah', [AdminController::class, 'view_riwayat_bermasalah'])->name('admin.daftar.riwayat.bermasalah');

    Route::get('/admin/kelola-akun/semua-akun', [AdminController::class, 'view_semua_akun'])->name('admin.kelola.akun.semua');
    Route::put('/admin/kelola-akun/update-status/{id}', [AdminController::class, 'update_status_akun'])->name('admin.update.status.akun');
    Route::get('/admin/kelola-akun/buat-akun', [AdminController::class, 'view_buat_akun'])->name('admin.kelola.buat.akun');
    Route::post('/register', [AuthController::class, 'register_auth'])->name('register.auth');
    Route::get('/admin/kelola-akun/edit-akun/{id}', [AdminController::class, 'view_edit_akun'])->name('admin.kelola.edit.akun');
    Route::put('/admin/kelola-akun/update-akun/{id}', [AdminController::class, 'update_akun'])->name('admin.kelola.update.akun');
    Route::delete('/admin/kelola-akun/delete-akun/{id}', [AdminController::class, 'delete_akun'])->name('admin.kelola.delete.akun');

    Route::get('/search', [AdminController::class, 'autocomplete'])->name('autocomplete');
    Route::post('/search', [AdminController::class, 'search_personil'])->name('search.personil');
});
