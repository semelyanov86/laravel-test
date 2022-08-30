<?php
declare(strict_types=1);

namespace Domains\Category\Actions;

use Domains\Category\Repositories\CategoryRepositoryInterface;
use Parents\Actions\Action;

final class GetCategoryBySlug extends Action
{
    public function __construct(
        protected CategoryRepositoryInterface $repository
    )
    {
    }

    public function handle(string $slug): \Domains\Category\Models\Category
    {
        return $this->repository->getCategoryBySlug($slug);
    }
}
