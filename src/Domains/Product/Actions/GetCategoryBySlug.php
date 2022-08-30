<?php
declare(strict_types=1);

namespace Domains\Product\Actions;

use Domains\Category\Models\Category;
use Domains\Product\Providers\ProductDependencyProvider;
use Parents\Actions\Action;

final class GetCategoryBySlug extends Action
{
    public function __construct(
        protected ProductDependencyProvider $dependencyProvider
    )
    {
    }

    public function handle(string $slug): Category
    {
        return $this->dependencyProvider->getCategoryFacade()->getCategoryBySlug($slug);
    }
}
