<?php

namespace Domains\Category\Repositories;

use Domains\Category\Models\Category;
use Illuminate\Pagination\LengthAwarePaginator;

interface CategoryRepositoryInterface
{
    public function all(): LengthAwarePaginator;

    public function getCategoryBySlug(string $slug): Category;
}
