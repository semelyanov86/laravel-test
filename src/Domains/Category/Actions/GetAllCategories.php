<?php
declare(strict_types=1);

namespace Domains\Category\Actions;

use Domains\Category\Repositories\CategoryRepositoryInterface;
use Parents\Actions\Action;

final class GetAllCategories extends Action
{
    public function __construct(
        protected CategoryRepositoryInterface $repository
    )
    {
    }

    public function handle(): \Illuminate\Pagination\LengthAwarePaginator
    {
        return $this->repository->all();
    }
}
