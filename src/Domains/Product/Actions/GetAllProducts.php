<?php
declare(strict_types=1);

namespace Domains\Product\Actions;

use Domains\Product\Repositories\ProductRepositoryInterface;
use Parents\Actions\Action;

final class GetAllProducts extends Action
{
    public function __construct(
        protected ProductRepositoryInterface $repository
    )
    {
    }

    public function handle(): \Illuminate\Pagination\LengthAwarePaginator
    {
        return $this->repository->all();
    }
}
