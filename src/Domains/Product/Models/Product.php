<?php
declare(strict_types=1);

namespace Domains\Product\Models;

use Domains\Category\Models\Category;
use Parents\Models\Model;

final class Product extends Model
{
    protected $guarded = [];

    protected function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
