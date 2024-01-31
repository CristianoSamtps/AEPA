<?php

use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\VoluntarioController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProjetoController;
use App\Http\Controllers\FotografiaProjetoController;
use App\Http\Controllers\PlanTypeController;
use App\Http\Controllers\PhotoEventController;
use App\Http\Controllers\PartnerShipController;
use App\Http\Controllers\SugestaoController;
use App\Http\Controllers\MemberDonerController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Auth\ResetPasswordController;


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

Route::get('/teste', function () {
    return App\Models\Donation::find(2)->member_doner->user;
});

Route::get('detalhesDoacoes/{projeto}', [PageController::class, 'detalhesDoacoes'])->name('detalhesDoacoes');

Route::get('/sugestoes', [PageController::class, 'sugestoes'])->name('sugestoes');

Route::get('/patrocinadores', [PageController::class, 'patrocinadores'])->name('patrocinadores');

Route::get('/projects', [ProjetoController::class, 'indexFrontOffice'])->name('projects'); /* Projetos */

Route::get('/project_details/{projeto}', [PageController::class, 'project_details'])->name('project_details'); /* Detalhes Projeto */

Route::get('/tornarMembro', [PageController::class, 'tornarMembro'])->name('tornarMembro');

Route::get('/pagamentoMembro', [PageController::class, 'pagamentoMembro'])->name('pagamentoMembro');

Route::get('/sobreNos', [PageController::class, 'sobreNos'])->name('sobreNos');

Route::get('/eventos', [PageController::class, 'eventos'])->name('eventos');

//Route::resource('participant', ParticipantController::class)->except(['create','store']);

Route::get('/galeria', [PageController::class, 'listarFotografias'])->name('galeria');

Route::get('/Registo', [PageController::class, 'LoginReg'])->name('LoginReg');

Route::get('/perfil', [PageController::class, 'perfil'])->name('perfil');

Route::get('/pagamentoMembro/{id}', [PageController::class, 'pagamentoMembro'])->name('pagamentoMembro');

Auth::routes(['verify' => true]);

Route::group([
    'middleware' => ['auth', 'verified']
], function () {

    Route::get('/perfil/{user}', [UserController::class, 'indexperfil'])->name('indexperfil');


    Route::get('/perfil/{user}/editar', [UserController::class, 'editperfil'])->name('editperfil');

    Route::put('/perfil/{user}/editar/update', [UserController::class, 'updateperfil'])->name('updateperfil');

    Route::put('/updatePassword/{user}', [UserController::class, 'updatePassword'])->name('updatePassword');


    Route::get('/perfil/{user}/projetosevents', [UserController::class, 'showPerfil'])->name('projetosperfil');

    Route::delete('/perfil/{user}/cancelar/{event}', [UserController::class, 'deleteregperfil'])->name('cancelarregperfil');


    Route::get('/perfil/{user}/doações', [UserController::class, 'donationsperfil'])->name('donationsperfil');

    Route::get('/perfil/{user}/doações/filtrado', [DonationController::class, 'userDonations'])->name('user.doacoes');



    Route::post('/atualizar-metodo-pagamento', [MemberDonerController::class, 'atualizarMetodoPagamento']);


    /* Participantes em eventos */

    Route::get('/eventoinfo/{event}', [PageController::class, 'eventoinfo'])->name('eventoinfo');


    Route::post('/eventoinfo/{event}', [ParticipantController::class, 'registarEvento'])->name('registarevento');


    Route::delete('/eventoinfo/{participant}/cancelarreg', [ParticipantController::class, 'cancelarreg'])->name('cancelarreg');


    /* Participantes em eventos */

    Route::put('/updatePassword/{user}', [UserController::class, 'updatePassword'])->name('updatePassword');

    /* voluntariado */
    Route::get('/voluntariado', [PageController::class, 'voluntariado'])->name('voluntariado');

    Route::get('/inscricao/{projeto_id}', [PageController::class, 'inscricao'])->name('inscricao');

    Route::post('/voluntariar/{projeto_id}', [VoluntarioController::class, 'registarvoluntariado'])->name('voluntariar');

    Route::post('/submit-payment', [PaymentController::class, 'store'])->name('submit.payment');

    Route::get('/pagamentoMembro/{id}', [PaymentController::class, 'showPaymentForm'])->name('pagamentoMembro');
    /* voluntariado */

    Route::post('/sugestoes', [SugestaoController::class, 'registarSugestao'])->name('registarsugestao');
    Route::post('/sugestoes/{member_doner}', [SugestaoController::class, 'votar'])->name('votar');
    Route::post('/doacoes/{projeto?}', [DonationController::class, 'registarDoacao'])->name('registardoacao');

    Route::group([
        'middleware' => ['admin'],
        'as' => 'admin.',
        'prefix' => 'admin'
    ], function () {

        Route::get('/', [PageController::class, 'dashboard'])->name('dashboard')->middleware('admin');

        Route::resource('eventos', EventController::class)->parameters(['eventos' => 'event']);

        Route::resource('eventos/{event}/fotografias', PhotoEventController::class)->parameters(['fotografias' => 'photo']);

        Route::resource('eventos/{event}/participantes', ParticipantController::class)->parameters(['participantes' => 'participants']);

        Route::resource('projeto', ProjetoController::class); /* Projetos */

        Route::resource('projeto/{projeto}/fotografiasprojeto', FotografiaProjetoController::class); /* Fotografias dos Projeto */

        Route::resource('users', UserController::class);

        Route::resource('sugestoes', SugestaoController::class)->parameters(['sugestoes' => 'sugestao'])->except(['create', 'store']);

        Route::resource('doacoes', DonationController::class)->parameters(['doacoes' => 'doacao']);;

        Route::resource('detalheDoacoes', DonationController::class)->parameters(['doacoes' => 'doacao']);

        Route::resource('patrocinadores', PartnerShipController::class)->parameters(['patrocinadores' => 'partner']);

        /*  Route::put('/admin/patrocinadores/{partner}', 'PartnerShipController@update')->name('admin.patrocinadores.update'); */
        /*  Route::resource('/admin/patrocinadores/{partner}', PartnerShipController::class); */

        Route::resource('plans', PlanController::class)->parameters(['doacoes' => 'doacao']);

        Route::resource('plantypes', PlanTypeController::class)->parameters(['doacoes' => 'doacao']);

        Route::resource('voluntario', VoluntarioController::class)->parameters(['doacoes' => 'doacao']);

        Route::get('/perfil', [PageController::class, 'perfil'])->name('perfil');

        Route::get(
            '/users/{user}/send_reactivate_mail',
            [UserController::class, 'send_reactivate_email']
        )
            ->name('users.sendActivationEmail');

        Route::delete(
            '/users/{user}/destroy_photo',
            [UserController::class, 'destroy_foto']
        )->name('users.destroyFoto');

        Route::delete(
            '/patrocinadores/{partner}/destroy_photo',
            [PartnerShipController::class, 'destroy_foto']
        )->name('patrocinadores.destroyFoto');
    });
});
