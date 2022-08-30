<?php
declare(strict_types=1);

namespace Domains\Category\Models;

use Domains\Product\Models\Product;
use Parents\Models\Model;

final class Category extends Model
{
    protected $fillable = ['name', 'slug'];

    public function products(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Product::class);
    }
}
