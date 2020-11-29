<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LocalidadController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\JugadorController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('escritorio',[DashboardController::class,'index'])->name('dashboard.index');
Route::get('perfil',[DashboardController::class,'perfil'])->name('dashboard.perfil');



Route::get('login',[LoginController::class,'form_login'])->name('login.form_login');
Route::post('auth',[LoginController::class,'auth'])->name('login.auth');
Route::get('logout',[LoginController::class,'logout'])->name('login.logout');

Route::get('localidad',[LocalidadController::class,'index'])->name('localidad.index');
Route::get('localidad/create',[LocalidadController::class,'create'])->name('localidad.create');
Route::post('localidad',[LocalidadController::class,'store'])->name('localidad.store');
Route::delete('localidad/{id}',[LocalidadController::class,'destroy'])->name('localidad.destroy');
Route::get('localidad/{id}/edit',[LocalidadController::class,'edit'])->name('localidad.edit');
Route::patch('localidad/update/{id}',[LocalidadController::class,'update'])->name('localidad.update');
Route::get('localidad/{id}',[LocalidadController::class,'show'])->name('localidad.show');


Route::get('equipo',[EquipoController::class,'index'])->name('equipo.index');
Route::get('equipo/create',[EquipoController::class,'create'])->name('equipo.create');
Route::post('equipo',[EquipoController::class,'store'])->name('equipo.store');
Route::delete('equipo/{id}',[EquipoController::class,'destroy'])->name('equipo.destroy');
Route::get('equipo/{id}/edit',[EquipoController::class,'edit'])->name('equipo.edit');
Route::patch('equipo/update/{id}',[EquipoController::class,'update'])->name('equipo.update');
Route::get('equipo/{id}',[EquipoController::class,'show'])->name('equipo.show');


Route::get('jugador',[JugadorController::class,'index'])->name('jugador.index');
Route::get('jugador/create',[JugadorController::class,'create'])->name('jugador.create');
Route::post('jugador',[JugadorController::class,'store'])->name('jugador.store');
Route::delete('jugador/{id}',[JugadorController::class,'destroy'])->name('jugador.destroy');
Route::get('jugador/{id}/edit',[JugadorController::class,'edit'])->name('jugador.edit');
Route::patch('jugador/update/{id}',[JugadorController::class,'update'])->name('jugador.update');
Route::get('jugador/{id}',[JugadorController::class,'show'])->name('jugador.show');
