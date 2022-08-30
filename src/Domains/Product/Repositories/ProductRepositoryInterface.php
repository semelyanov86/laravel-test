<?php

namespace Domains\Product\Repositories;

use Illuminate\Pagination\LengthAwarePaginator;

interface ProductRepositoryInterface
{
    public function all(): LengthAwarePaginator;

    public function getProductsByIds(array $ids): \Illuminate\Database\Eloquent\Collection|array;
}
