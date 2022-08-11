<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\MonitorController;
use App\Http\Controllers\OcorrenciaController;

Route::get('/', [IndexController::class,'index']);

Route::get('registros/create', [RegistroController::class,'create']);
Route::post('registros', [RegistroController::class,'store']);
Route::get('registros/{registro}', [RegistroController::class,'show']);
Route::get('registros/{registro}/picture', [RegistroController::class, 'picture']);

Route::get('places/create', [PlaceController::class,'create']);
Route::post('places', [PlaceController::class,'store']);
Route::get('places', [PlaceController::class,'index']);

Route::get('ocorrencias/create', [OcorrenciaController::class, 'create']);
Route::post('ocorrencias/', [OcorrenciaController::class, 'store']);
Route::get('ocorrencias/{ocorrencia}', [OcorrenciaController::class, 'show']);
Route::get('ocorrencias/{ocorrencia}/edit', [OcorrenciaController::class, 'edit']);
Route::patch('ocorrencias/{ocorrencia}/', [OcorrenciaController::class, 'update']);
Route::get('ocorrencias', [OcorrenciaController::class, 'index']);
Route::delete('ocorrencias/{ocorrencia}', [OcorrenciaController::class, 'destroy']);
Route::get('monitores', [MonitorController::class,'index']);
Route::get('monitores/{monitor}', [MonitorController::class,'show']);