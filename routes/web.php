<?php

use App\Http\Controllers\PolisiController;
use App\Http\Controllers\KriminalController;
use App\Http\Controllers\LapasController;

Route::resource('polisi', PolisiController::class);
Route::resource('kriminal', KriminalController::class);
Route::resource('lapas', LapasController::class);

?>