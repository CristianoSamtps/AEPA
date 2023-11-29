<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
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

Route::get('/patrocinadores', [PageController::class, 'patrocinadores'])->name('patrocinadores');

Route::get('/projects', [PageController::class, 'projects'])->name('projects');

Route::get('/project_detail1', [PageController::class, 'project_detail1'])->name('project_detail1');

Route::get('/project_detail2', [PageController::class, 'project_detail2'])->name('project_detail2');

Route::get('/tornarMembro', [PageController::class, 'tornarMembro'])->name('tornarMembro');

Route::get('/sobreNos', [PageController::class, 'sobreNos'])->name('sobreNos');

Route::get('/eventos', [PageController::class, 'eventos'])->name('eventos');

Route::get('/galeria', [PageController::class, 'galeria'])->name('galeria');

Route::get('/Registo', [PageController::class, 'LoginReg'])->name('LoginReg');

Auth::routes(['verify' => true]);

Route::group([
    'middleware' => ['auth', 'verified'],
], function () {

    Route::get('/users/{user}/edit',[UserController::class,'editperfil'])->name('users.editperfil');
    Route::put('/users/{user}',[UserController::class,'updateperfil'])->name('users.updateperfil');

    Route::group([
        'as' => 'admin.',
        'prefix' => 'admin'
    ], function () {

        Route::resource('eventos', EventController::class);

        Route::resource('users', UserController::class);


        Route::get('/', [PageController::class, 'dashboard'])->name('dashboard')->middleware('admin');


        Route::get(
            '/users/{user}/send_reactivate_mail',
            [UserController::class, 'send_reactivate_email']
        )
            ->name('users.sendActivationEmail');
        Route::delete(
            '/users/{user}/destroy_photo',
            [UserController::class, 'destroy_foto']
        )
            ->name('users.destroyPhoto');

    });
});
