<?php

use App\Models\Posttest;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MapelController;
// use App\Http\Controllers\LoginController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\JawabanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PretestController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\PosttestController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\AksesPosttestController;
use App\Http\Controllers\Auth\RegisterController;

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
Route::get('/dbGuru', [DashboardController::class, 'index']);
Route::get('/', [LandingPageController::class, 'index'])->name('home');
// route login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
// Route::get('/login', [RegisterController::class, 'index']);

// route kelola user
Route::resource('/kelUser', UserController::class);

Route::resource('/kelPosttest', PosttestController::class);
Route::get('/getMateri/{id_mapel}', [PosttestController::class, 'getMateri']);

Route::resource('/kelPretest', PretestController::class)->except('edit', 'update', 'show');
Route::resource('/kelFeedback', FeedbackController::class);
Route::resource('/kelJawaban', JawabanController::class);
Route::resource('/laporan', NilaiController::class);
Route::resource('/kelMateri', MateriController::class);
Route::resource('/kelMapel', MapelController::class)->except('show');

// halaman home
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/detailMapel/{id}', [HomeController::class, 'detailMapel']);
Route::get('/preMateriPost/{id}', [HomeController::class, 'preMateriPost'])->name('preMateriPost');
Route::get('/aksesMateri/{id}', [HomeController::class, 'aksesMateri']);


// akses post test
Route::get('/aksesPostTest/{id}', [AksesPosttestController::class, 'index']);
Route::post('/submitPostTest', [AksesPosttestController::class, 'submitPostTest'])->name('submitPostTest');

// riwayat
Route::get('/riwayat', [RiwayatController::class, 'index'])->name('riwayat.index');