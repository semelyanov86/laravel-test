<?php

declare(strict_types=1);

namespace Domains\Product\Facades;

use Domains\Product\Actions\GetProductsByIds;

final class ProductFacade extends \Parents\Facades\Facade implements ProductFacadeInterface
{
    public function getProductsByIds(array $ids): \Illuminate\Database\Eloquent\Collection|array
    {
        return GetProductsByIds::run($ids);
    }
}
