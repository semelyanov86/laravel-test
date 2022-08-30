<?php

namespace Domains\Category\Providers;

use Illuminate\Support\ServiceProvider;

class CategoryServiceProvider extends ServiceProvider
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
