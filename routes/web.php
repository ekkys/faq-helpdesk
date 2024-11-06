<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MAplikasiController;

Route::resource('aplikasis', MAplikasiController::class);
