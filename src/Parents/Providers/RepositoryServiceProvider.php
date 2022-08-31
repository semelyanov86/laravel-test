<?php

declare(strict_types=1);

namespace Parents\Providers;

use Domains\Category\Facades\CategoryFacade;
use Domains\Category\Facades\CategoryFacadeInterface;
use Domains\Category\Repositories\CategoryRepositoryInterface;
use Domains\Category\Repositories\Eloquent\CategoryRepository;
use Domains\Product\Facades\ProductFacade;
use Domains\Product\Facades\ProductFacadeInterface;
use Domains\Product\Repositories\Eloquent\ProductRepository;
use Domains\Product\Repositories\ProductRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(CategoryFacadeInterface::class, CategoryFacade::class);
        $this->app->bind(ProductFacadeInterface::class, ProductFacade::class);
    }
}
