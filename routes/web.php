<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegistroServicioController;
use App\Http\Controllers\RegistroHorometroController;
use App\Http\Controllers\RegistroCheckListVehiculoController;

use App\Http\Controllers\RegistroMantenimientoCincuentaController;
use App\Http\Controllers\RegistroMantenimientoCienController;
use App\Http\Controllers\RegistroMantenimientoCientoCincuentaController;
use App\Http\Controllers\RegistroMantenimientoQuinientasController;

use App\Http\Controllers\RegistroHorometroCincuentaController;
use App\Http\Controllers\RegistroHorometroCienController;
use App\Http\Controllers\RegistroHorometroCientoCincuentaController;
use App\Http\Controllers\RegistroHorometroQuinientosController;

use App\Http\Controllers\EstadisticasController;
use App\Http\Controllers\ResumenController;

use App\Http\Controllers\ReportesController;


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
    return view('auth.login');
});

Auth::routes();

// REGISTROS DE FORMATOS
Route::resource('servicio', RegistroServicioController::class);
Route::resource('horometro', RegistroHorometroController::class);
Route::resource('checkList', RegistroCheckListVehiculoController::class);

// REGISTROS DE FORMATOS PARA MANTENIMIENTOS
Route::resource('mantenimientoCincuenta', RegistroMantenimientoCincuentaController::class);
Route::resource('mantenimientoCien', RegistroMantenimientoCienController::class);
Route::resource('mantenimientoCientoCincuenta', RegistroMantenimientoCientoCincuentaController::class);
Route::resource('mantenimientoQuinientos', RegistroMantenimientoQuinientasController::class);

// REGISTROS DE HOROMETROS.
Route::resource('horometroCincuenta', RegistroHorometroCincuentaController::class);
Route::resource('horometroCien', RegistroHorometroCienController::class);
Route::resource('horometroCientoCincuenta', RegistroHorometroCientoCincuentaController::class);
Route::resource('horometroQuinientos', RegistroHorometroQuinientosController::class);

// ESTADISTICAS Y RESUMENES
Route::resource('estadisticas', EstadisticasController::class);
Route::resource('resumen', ResumenController::class);

// REPORTES PDF
Route::get('/generarReportePorServicio/PDF/{fechaRegistro}/{turno}/{id}', [ReportesController::class, 'generarReportePorServicio']);

Route::post('/generarReporteHorometro/PDF', [ReportesController::class, 'generarReporteHorometro']);

Route::get('/generarReporteCheckList/PDF/{id}', [ReportesController::class, 'generarReporteCheckList']);






Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
