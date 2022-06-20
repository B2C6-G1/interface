<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\GuildsController;

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
    });
});