<?php
declare(strict_types=1);

namespace Domains\Category\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Domains\Category\Actions\GetAllCategories;
use Domains\Category\Transformers\CategoryTransformer;
use League\Fractal\Serializer\JsonApiSerializer;

final class CategoryController extends Controller
{
    public function index(): ?array
    {
        return fractal(
            GetAllCategories::run(),
            app(CategoryTransformer::class),
            new JsonApiSerializer()
        )->withResourceName('Category')
            ->toArray();
    }
}
