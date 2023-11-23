<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AfiliadoController;
use App\Http\Controllers\DepositoController;
use App\Http\Controllers\RetiroController;
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

route::get('/afiliado/{empleado}',[AfiliadoController::class,'index']);

route::delete('/empleado/delete',[AfiliadoController::class,'destory']);


route::get('/deposito/{empleado}/{idafi}/{nomb}',[DepositoController::class,'index']);

route::get('/deposito/create/{idem}/{idafi}/{nom}',[DepositoController::class,'create']);
route::get('/deposito/edit/{idem}/{idafi}/{nom}',[DepositoController::class,'edit']);

route::get('/retiro/{empleado}/{idafi}/{nombre}',[RetiroController::class,'index']);

route::get('/retiro/create/{idem}/{idafi}/{nombre}',[RetiroController::class,'create']);
route::get('/retiro/edit/{idem}/{idafi}/{nombre}',[RetiroController::class,'edit']);



Route::resource('/empleado','App\Http\Controllers\EmpleadoController');
Route::resource('/afiliado','App\Http\Controllers\AfiliadoController');
Route::resource('/retiro','App\Http\Controllers\RetiroController');
Route::resource('/deposito','App\Http\Controllers\DepositoController');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
