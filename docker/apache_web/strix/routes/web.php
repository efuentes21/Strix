<?php

use App\Http\Controllers\RaceController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\CompetitorController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('admin/races', [RaceController::class, 'index']);
Route::get('race/create', [RaceController::class, 'create'])->name('race.create');

Route::get('admin/sponsors', [SponsorController::class, 'index']);
Route::get('sponsor/create', [SponsorController::class, 'create'])->name('sponsor.create');

Route::get('admin/insurances', [InsuranceController::class, 'index']);
Route::get('insurance/create', [InsuranceController::class, 'create'])->name('insurance.create');

Route::get('admin/challenges', [ChallengeController::class, 'index']);
Route::get('challenge/create', [ChallengeController::class, 'create'])->name('challenge.create');

Route::get('admin/competitors', [CompetitorController::class, 'index']);
Route::get('competitor/create', [CompetitorController::class, 'create'])->name('competitor.create');
