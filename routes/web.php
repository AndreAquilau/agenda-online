<?php

use Illuminate\Support\Facades\Route;
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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('site/login');
});

Route::get('/dashboard', [AgendaController::class, 'index'])->name('dashboard');
Route::get('/dashboard/editar/{agenda}', [AgendaController::class, 'edit'])->name('dashboard_editar');
Route::patch('/dashboard/editar/{agenda}', [AgendaController::class, 'updateAgenda'])->name('dashboard_update');

Route::get('/historico', [HistoricoController::class, 'index'])->name('historico');

Route::post('/dashboard/novo', [AgendaController::class, 'store'])->name('registrar_agenda');
Route::delete('/dashboard/{agenda}', [AgendaController::class, 'destroy'])->name('destroy_agenda');
Route::patch('/dashboard/{agenda}', [AgendaController::class, 'updateConfirm'])->name('update_confirm_agenda');
