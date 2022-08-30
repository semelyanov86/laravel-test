<?php

namespace Domains\Product\Providers;

use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        $this->registerRoutes();
    }

    /**
     * @return void
     */
    protected function registerRoutes(): void
    {
        $this->loadRoutesFrom(
            path: __DIR__ . '/../Routes/Api/v1.php',
        );
    }
}
