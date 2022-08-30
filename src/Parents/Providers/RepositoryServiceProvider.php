<?php

declare(strict_types=1);

namespace Parents\Providers;

use Domains\Category\Repositories\CategoryRepositoryInterface;
use Domains\Category\Repositories\Eloquent\CategoryRepository;
use Domains\Product\Repositories\Eloquent\ProductRepository;
use Domains\Product\Repositories\ProductRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
    }
}
