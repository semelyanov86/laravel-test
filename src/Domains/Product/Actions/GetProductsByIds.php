<?php
declare(strict_types=1);

namespace Domains\Product\Actions;

use Domains\Product\Repositories\ProductRepositoryInterface;
use Parents\Actions\Action;

/**
 * @method \Illuminate\Database\Eloquent\Collection|array run(array $ids)
 */
final class GetProductsByIds extends Action
{
    public function __construct(
        protected ProductRepositoryInterface $repository
    )
    {
    }

    public function handle(array $ids): \Illuminate\Database\Eloquent\Collection|array
    {
        return $this->repository->getProductsByIds($ids);
    }
}
