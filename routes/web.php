<?php

use App\Models\Posttest;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PretestController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\PosttestController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\NilaiController;

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
Route::resource('/kelUser', UserController::class);
Route::resource('/kelPosttest', PosttestController::class);
Route::resource('/kelPretest', PretestController::class);
Route::resource('/kelFeedback', FeedbackController::class);
Route::resource('/kelJawaban', PosttestController::class);
Route::resource('/laporan', NilaiController::class);
Route::resource('/kelMateri', MateriController::class);
Route::resource('/kelPostTest', PosttestController::class);
Route::resource('/kelPretest', PretestController::class);
Route::resource('/kelMapel', MapelController::class);


Route::get('/', [LandingPageController::class, 'index']);
