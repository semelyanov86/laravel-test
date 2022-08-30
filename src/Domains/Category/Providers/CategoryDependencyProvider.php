<?php

declare(strict_types=1);

namespace Domains\Category\Providers;

use Domains\Product\Facades\ProductFacade;
use Domains\Product\Facades\ProductFacadeInterface;

final class CategoryDependencyProvider extends \Parents\Providers\DependencyProvider
{
    public function getProductFacade(): ProductFacadeInterface
    {
        return app(ProductFacade::class);
    }
}
