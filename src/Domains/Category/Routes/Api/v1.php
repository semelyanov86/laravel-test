<?php
declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::prefix('api/v1')->as('api:v1:')->group(function () {

    Route::prefix('categories')->as('categories:')->group(function () {
        Route::get('/', [\Domains\Category\Http\Controllers\Api\V1\CategoryController::class, 'index'])->name('index');
    });

});
