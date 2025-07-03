<?php

use App\Http\Controllers\PricesController;
use Illuminate\Support\Facades\Route;

Route::get('/prices', PricesController::class);
