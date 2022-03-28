<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\TypeFormationController;

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

Route::get('/', [FormationController::class, 'index'])->name('formations.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
Route::resource('formations', FormationController::class)->except('index');
Route::get('/typeformation/create', [TypeFormationController::class, 'create'])->name('typeformation.create');
Route::post('/typeformation/store', [TypeFormationController::class, 'store'])->name('typeformation.store');

Route::middleware(['auth'])->group(function()
{
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
});

require __DIR__.'/auth.php';
