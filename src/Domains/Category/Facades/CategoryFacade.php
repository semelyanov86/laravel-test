<?php

declare(strict_types=1);

namespace Domains\Category\Facades;

use Domains\Category\Actions\GetCategoryBySlug;
use Domains\Category\Models\Category;

final class CategoryFacade extends \Parents\Facades\Facade implements CategoryFacadeInterface
{
    public function getCategoryBySlug(string $slug): Category
    {
        return GetCategoryBySlug::run($slug);
    }
}
