<?php

use App\Http\Controllers\ParticipantController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProjetoController;
use App\Http\Controllers\PlanTypeController;
use App\Http\Controllers\PhotoEventController;
use App\Http\Controllers\FotografiaProjetoController;


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

Route::get('/pagamentoMembro', [PageController::class, 'pagamentoMembro'])->name('pagamentoMembro');

Route::get('/sobreNos', [PageController::class, 'sobreNos'])->name('sobreNos');

Route::get('/eventos', [PageController::class, 'eventos'])->name('eventos');

Route::get('/galeria', [PageController::class, 'galeria'])->name('galeria');

Route::get('/Registo', [PageController::class, 'LoginReg'])->name('LoginReg');

Route::get('/perfil', [PageController::class, 'perfil'])->name('perfil');


Auth::routes(['verify' => true]);


Route::group([
    'middleware' => ['auth', 'verified'],
], function () {

    Route::get('/users/{user}/index', [UserController::class, 'indexperfil'])->name('users.indexperfil');
    Route::get('/users/{user}/edit', [UserController::class, 'editperfil'])->name('users.editperfil');
    Route::put('/users/{user}', [UserController::class, 'updateperfil'])->name('users.updateperfil');

    Route::group([
        'as' => 'admin.',
        'prefix' => 'admin'
    ], function () {

        Route::resource('eventos', EventController::class)->parameters(['eventos' => 'event']);

        Route::resource('eventos/{event}/fotografias', PhotoEventController::class)->parameters(['fotografias' => 'photo']);

        Route::resource('eventos/{event}/participantes', ParticipantController::class)->parameters(['participantes' => 'participants']);

        Route::resource('projeto', EventController::class);

        Route::resource('FotografiaProjeto', EventController::class);

        Route::resource('users', UserController::class);

        Route::resource('sugestoes', EventController::class);

        Route::get('/perfil', [PageController::class, 'perfil'])->name('perfil');


        Route::get('/', [PageController::class, 'dashboard'])->name('dashboard')->middleware('admin');


        Route::get(
            '/users/{user}/send_reactivate_mail',
            [UserController::class, 'send_reactivate_email']
        )
            ->name('users.sendActivationEmail');

        Route::delete(
            '/users/{user}/destroy_photo',
            [UserController::class, 'destroy_foto']
        )->name('users.destroyFoto');

    });
});
