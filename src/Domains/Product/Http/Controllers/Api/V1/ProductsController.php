<?php
declare(strict_types=1);

namespace Domains\Product\Http\Controllers\Api\V1;

use Domains\Product\Actions\GetAllProducts;
use Domains\Product\Transformers\ProductTransformer;
use League\Fractal\Serializer\JsonApiSerializer;
use Parents\Controllers\ApiController as Controller;

final class ProductsController extends Controller
{
    public function index(): ?array
    {
        return fractal(
            GetAllProducts::run(),
            app(ProductTransformer::class),
            new JsonApiSerializer()
        )->withResourceName('Products')
            ->toArray();
    }
}
