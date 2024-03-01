<?php

use App\Http\Controllers\InvmanController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/manajemen', [InvmanController::class, 'index']);
Route::get('/manajemen/create', [InvmanController::class, 'create']);
Route::post('/manajemen/store', [InvmanController::class, 'store']);
Route::get('/manajemen/{id}/edit', [InvmanController::class, 'edit']);
Route::put('/manajemen/{id}', [InvmanController::class, 'update']);
Route::delete('/manajemen/{id}', [InvmanController::class, 'destroy']);
