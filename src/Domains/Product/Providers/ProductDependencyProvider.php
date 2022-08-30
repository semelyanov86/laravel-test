<?php
declare(strict_types=1);

namespace Domains\Product\Providers;

use Domains\Category\Facades\CategoryFacade;
use Domains\Category\Facades\CategoryFacadeInterface;

final class ProductDependencyProvider extends \Parents\Providers\DependencyProvider
{
    public function getCategoryFacade(): CategoryFacadeInterface
    {
        return app(CategoryFacade::class);
    }
}
