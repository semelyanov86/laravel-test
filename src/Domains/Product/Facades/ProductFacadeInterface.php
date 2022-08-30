<?php

namespace Domains\Product\Facades;

interface ProductFacadeInterface
{
    public function getProductsByIds(array $ids): \Illuminate\Database\Eloquent\Collection|array;
}
