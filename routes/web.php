<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\EventController;

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


Route::get('/', [PageController::class, 'index'])->name('index');

Route::get('/topDonates', [PageController::class, 'topDonates'])->name('topDonates');

Route::get('/doacoes', [PageController::class, 'doacoes'])->name('doacoes');

Route::get('/sugestoes', [PageController::class, 'sugestoes'])->name('sugestoes');

Route::get('/patrocinadores', [PageController::class, 'patrocinadores'])->name('patrocinadores');

Route::get('/projects', [PageController::class, 'projects'])->name('projects');

Route::get('/project_detail1', [PageController::class, 'project_detail1'])->name('project_detail1');

Route::get('/project_detail2', [PageController::class, 'project_detail2'])->name('project_detail2');

Route::get('/tornarMembro', [PageController::class, 'tornarMembro'])->name('tornarMembro');

Route::get('/sobreNos', [PageController::class, 'sobreNos'])->name('sobreNos');

Route::get('/eventos', [PageController::class, 'eventos'])->name('eventos');

Route::get('/galeria', [PageController::class, 'galeria'])->name('galeria');

Route::get('/Registo', [PageController::class, 'LoginReg'])->name('LoginReg');

Route::resource('admin/evento', EventController::class, ['as' => 'admin']);

Route::get('admin', [PageController::class,'dashboard'])->name('admin.dashboard');

Route::get('/perfil', [PageController::class, 'perfil'])->name('perfil');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



