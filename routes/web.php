<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegistroServicioController;
use App\Http\Controllers\RegistroHorometroController;
use App\Http\Controllers\RegistroCheckListVehiculoController;
use App\Http\Controllers\RegistroHorometroMantenimientoController;

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

// REGISTROS

Route::resource('servicio', RegistroServicioController::class);
Route::resource('horometro', RegistroHorometroController::class);
Route::resource('checkList', RegistroCheckListVehiculoController::class);
Route::resource('mantenimiento', RegistroHorometroMantenimientoController::class);

// ESTADISTICAS Y RESUMENES
Route::resource('estadisticas', EstadisticasController::class);
Route::resource('resumen', ResumenController::class);


// REPORTES PDF
Route::get('/generarReportePorServicio/PDF/{fechaRegistro}/{turno}/{id}', [ReportesController::class, 'generarReportePorServicio']);

Route::post('/generarReporteHorometro/PDF', [ReportesController::class, 'generarReporteHorometro']);

Route::get('/generarReporteCheckList/PDF/{id}', [ReportesController::class, 'generarReporteCheckList']);






Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
