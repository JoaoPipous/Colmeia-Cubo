<?php

use App\Http\Controllers\Auth\LogoutController;
use App\Livewire\Auth\Login;
use App\Livewire\Pages\Home;
use Illuminate\Support\Facades\Route;

use App\Livewire\Panel\Curso\Index as CursoIndex;
use App\Livewire\Panel\Curso\Create as CursoCreate;
use App\Livewire\Panel\Curso\Edit as CursoEdit;

use App\Livewire\Panel\UnidadeCurricular\Index as UCIndex;
use App\Livewire\Panel\UnidadeCurricular\Create as UCCreate;
use App\Livewire\Panel\UnidadeCurricular\Edit as UCEdit;

use App\Livewire\Panel\AreaDeConhecimento\Index as ACIndex;
use App\Livewire\Panel\AreaDeConhecimento\Create as ACCreate;
use App\Livewire\Panel\AreaDeConhecimento\Edit as ACEdit;

use App\Livewire\Panel\AreaFuncional\Index as AFIndex;
use App\Livewire\Panel\AreaFuncional\Create as AFCreate;
use App\Livewire\Panel\AreaFuncional\Edit as AFEdit;

use App\Livewire\Panel\Users\Index as UsersIndex;
use App\Livewire\Panel\Users\Create as UsersCreate;
use App\Livewire\Panel\Users\Edit as UsersEdit;

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

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');
});

Route::middleware('auth')->group(function () {
    Route::prefix('cursos')->name('cursos')->group(function () {
        Route::get('/', CursoIndex::class)
            ->name('.index');

        Route::get('edit/{id}', CursoEdit::class)
            ->name('.edit');

        Route::get('new/', CursoCreate::class)
            ->name('.create');
    });

    Route::prefix('ac')->name('ac')->group(function () {
        Route::get('/', ACIndex::class)
            ->name('.index');

        Route::get('edit/{id}', ACEdit::class)
            ->name('.edit');

        Route::get('show/{id}', ACIndex::class)
            ->name('.show');

        Route::get('new/{id}', ACCreate::class)
            ->name('.create-with-id');

        Route::get('new/', ACCreate::class)
            ->name('.create');
    });

    Route::prefix('af')->name('af')->group(function () {
        Route::get('/', AFIndex::class)
            ->name('.index');

        Route::get('edit/{id}', AFEdit::class)
            ->name('.edit');

        Route::get('show/{id}', AFIndex::class)
            ->name('.show');

        Route::get('new/{id}', AFCreate::class)
            ->name('.create-with-id');

        Route::get('new/', AFCreate::class)
            ->name('.create');
    });

    Route::prefix('uc')->name('ucs')->group(function () {
        Route::get('/', UCIndex::class)
            ->name('.index');

        Route::get('edit/{id}', UCEdit::class)
            ->name('.edit');

        Route::get('show/{id}', UCIndex::class)
            ->name('.show');

        Route::get('new', UCCreate::class)
            ->name('.create');

        Route::get('new/{id}', UCCreate::class)
            ->name('.create-with-id');
    });

    Route::prefix('usuarios')->name('users')->group(function () {
        Route::get('/', UsersIndex::class)
            ->name('.index');

        Route::get('edit/{id}', UsersEdit::class)
            ->name('.edit');

        Route::get('new/', UsersCreate::class)
            ->name('.create');
    });

    Route::get('logout', LogoutController::class)
        ->name('logout');
});

Route::get('/{curso?}', Home::class)->name('home');
