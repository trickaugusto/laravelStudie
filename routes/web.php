<?php

use App\Http\Controllers\Saudacao;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ClientController;

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

Route::get('/', [SiteController::class, 'index'])->name('index');
Route::get('/sobre', [SiteController::class, 'sobre']);
Route::get('/contato', [SiteController::class, 'contato']);
Route::get('/servicos', [SiteController::class, 'servicos']);
Route::get('/servico/{id}', [SiteController::class, 'servico']);

// Com interrogação o parâmetro fica opcional, não causando erro se não for passado
Route::get('/saudacao/{nome?}', Saudacao::class);

// Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
// Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
// Route::get('/clients/{id}', [ClientController::class, 'show'])->name('clients.show');
// Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');
// Route::get('/clients/{id}/edit', [ClientController::class, 'edit'])->name('clients.edit');
// Route::put('/clients/{id}', [ClientController::class, 'update'])->name('clients.update');
// Route::delete('/clients/{id}', [ClientController::class, 'destroy'])->name('clients.destroy');


Route::resource('clients', ClientController::class); // As 7 linhas de cima foram substituídas por essa única linha
// Documentação -> https://laravel.com/docs/8.x/controllers#/resource-controllers