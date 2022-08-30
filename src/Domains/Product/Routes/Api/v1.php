<?php
declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::prefix('api/v1')->as('api:v1:')->group(function () {

    Route::prefix('products')->as('products:')->group(function () {
        Route::get('/', [\Domains\Product\Http\Controllers\Api\V1\ProductsController::class, 'index'])->name('index');
    });

});
