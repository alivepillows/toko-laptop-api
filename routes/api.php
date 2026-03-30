<?php

use App\Http\Controllers\Api\LaptopController;
use Illuminate\Support\Facades\Route;

Route::apiResource('laptops', LaptopController::class);