<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/patrocinadores', [PageController::class, 'patrocinadores'])->name('patrocinadores');

Route::get('/projects', [PageController::class, 'projects'])->name('projects');

Route::get('/project_detail1', [PageController::class, 'project_detail1'])->name('project_detail1');

Route::get('/project_detail2', [PageController::class, 'project_detail2'])->name('project_detail2');

Route::get('/tornarMembro', [PageController::class, 'tornarMembro'])->name('tornarMembro');

Route::get('/sobreNos', [PageController::class, 'sobreNos'])->name('sobreNos');
