<?php

namespace Domains\Product\Transformers;

use Domains\Product\Models\Product;
use Parents\Transformers\Transformer;

class ProductTransformer extends Transformer
{

    public function transform(Product $product): array
    {
        return [
            'id' => $product->id,
            'name' => $product->name,
            'description' => $product->description,
            'details' => $product->details,
            'featured' => $product->featured,
            'meta' => [
                'created_at' => $product->created_at,
                'updated_at' => $product->updated_at
            ]
        ];
    }
}
