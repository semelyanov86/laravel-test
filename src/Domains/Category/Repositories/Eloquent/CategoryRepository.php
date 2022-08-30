<?php

declare(strict_types=1);

namespace Domains\Category\Repositories\Eloquent;

use Domains\Category\Models\Category;
use Domains\Category\Repositories\CategoryRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;
use Parents\Repositories\QueryBuilder;
use Parents\Repositories\Repository;

final class CategoryRepository extends Repository implements CategoryRepositoryInterface
{
    public function all(): LengthAwarePaginator
    {
        return QueryBuilder::for(Category::class)->jsonPaginate();
    }

    public function getCategoryBySlug(string $slug): Category
    {
        /** @var Category $category */
        $category = QueryBuilder::for(Category::class)->where('slug', $slug)->firstOrFail();
        return $category;
    }
}
