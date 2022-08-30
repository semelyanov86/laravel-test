<?php

declare(strict_types=1);

namespace Domains\Product\Repositories\Eloquent;

use Domains\Product\Models\Product;
use Domains\Product\Repositories\ProductRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;
use Parents\Repositories\QueryBuilder;
use Parents\Repositories\Repository;

final class ProductRepository extends Repository implements ProductRepositoryInterface
{
    public function all(): LengthAwarePaginator
    {
        return QueryBuilder::for(Product::class)->jsonPaginate();
    }

    public function getProductsByIds(array $ids): \Illuminate\Database\Eloquent\Collection|array
    {
        return QueryBuilder::for(Product::class)->whereIn('id', $ids)->get();
    }
}
