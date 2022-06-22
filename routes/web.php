<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\GuildsController;
use App\Http\Controllers\TeamsController;

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

Route::get('/', [PagesController::class, 'home']);

Route::prefix('app')->group(function () {
    Route::get('/', [PagesController::class, 'home'])->name('app.home');

    Route::prefix('guilds')->group(function () {
        Route::get('/', [GuildsController::class, 'index'])->name('guilds.index');
        Route::get('create', [GuildsController::class, 'create'])->name('guilds.create');
        Route::get('{id}/edit', [GuildsController::class, 'edit'])->name('guilds.edit');

        Route::post('store', [GuildsController::class, 'store'])->name('guilds.store');
        Route::put('{id}/update', [GuildsController::class, 'update'])->name('guilds.update');
        Route::delete('{id}/delete', [GuildsController::class, 'destroy'])->name('guilds.destroy');
    });

    Route::prefix('teams')->group(function () {
        Route::get('/', [TeamsController::class, 'index'])->name('teams.index');
        Route::get('create', [TeamsController::class, 'create'])->name('teams.create');
        Route::get('{id}/edit', [TeamsController::class, 'edit'])->name('teams.edit');

        Route::post('store', [TeamsController::class, 'store'])->name('teams.store');
        Route::put('{id}/update', [TeamsController::class, 'update'])->name('teams.update');
        Route::delete('{id}/delete', [TeamsController::class, 'destroy'])->name('teams.destroy');
    });
});