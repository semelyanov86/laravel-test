<?php

namespace Domains\Category\Facades;

use Domains\Category\Models\Category;

interface CategoryFacadeInterface
{
    public function getCategoryBySlug(string $slug): Category;
}
