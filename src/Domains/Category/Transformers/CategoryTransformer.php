<?php
declare(strict_types=1);

namespace Domains\Category\Transformers;

use Domains\Category\Models\Category;
use Domains\Category\Providers\CategoryDependencyProvider;
use Domains\Product\Transformers\ProductTransformer;
use League\Fractal\Resource\Collection;
use Parents\Transformers\Transformer;

final class CategoryTransformer extends Transformer
{
    public function __construct(
        protected CategoryDependencyProvider $dependencyProvider
    )
    {
    }

    protected array $defaultIncludes = [];

    protected array $availableIncludes = ['products'];

    public function transform(Category $category): array
    {
        return [
            'id' => (int) $category->id,
            'name' => $category->name,
            'slug' => $category->slug,
            'created_at' => $category->created_at,
            'updated_at' => $category->updated_at,
            'products_count' => $this->dependencyProvider->getProductFacade()->getProductsByIds([2,3])->count(),
        ];
    }

    public function includeProducts(Category $category): Collection
    {
        return $this->collection($category->products, new ProductTransformer);
    }
}
