<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Fortify;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\HistoricoController;


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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('/'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/', function () {
  return view('site/home');
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [AgendaController::class, 'index'])->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/editar/{agenda}', [AgendaController::class, 'edit'])->name('dashboard_editar');
Route::middleware(['auth:sanctum', 'verified'])->patch('/dashboard/editar/{agenda}', [AgendaController::class, 'updateAgenda'])->name('dashboard_update');

Route::middleware(['auth:sanctum', 'verified'])->get('/historico', [HistoricoController::class, 'index'])->name('historico');

Route::middleware(['auth:sanctum', 'verified'])->post('/dashboard/novo', [AgendaController::class, 'store'])->name('registrar_agenda');
Route::middleware(['auth:sanctum', 'verified'])->delete('/dashboard/{agenda}', [AgendaController::class, 'destroy'])->name('destroy_agenda');
Route::middleware(['auth:sanctum', 'verified'])->patch('/dashboard/{agenda}', [AgendaController::class, 'updateConfirm'])->name('update_confirm_agenda');
