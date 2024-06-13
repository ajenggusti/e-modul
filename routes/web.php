<?php

use App\Models\Posttest;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\JawabanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PretestController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\PosttestController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/dbGuru',[DashboardController::class, 'index']);
Route::get('/', [LandingPageController::class, 'index']);
Route::resource('/kelUser', UserController::class);
Route::resource('/kelPosttest', PosttestController::class);
Route::resource('/kelPretest', PretestController::class);
Route::resource('/kelFeedback', FeedbackController::class);
Route::resource('/kelJawaban', JawabanController::class);
Route::resource('/laporan', NilaiController::class);
Route::resource('/kelMateri', MateriController::class);
Route::resource('/kelMapel', MapelController::class);

// Route::get('/login', [LoginController::class,'index']);

// halaman home
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/detailMapel/{id}', [HomeController::class, 'detailMapel']);
Route::get('/preMateriPost/{id}', [HomeController::class, 'preMateriPost'])->name('preMateriPost');
Route::get('/aksesMateri/{id}', [HomeController::class, 'aksesMateri']);

