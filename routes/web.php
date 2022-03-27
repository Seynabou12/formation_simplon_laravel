<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormationController;
use GuzzleHttp\Middleware;

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
Route::get('/categories', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');

Route::middleware(['auth'])->group(function()
{
    

    Route::resource('formations', FormationController::class)->except('index');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
});

require __DIR__.'/auth.php';
