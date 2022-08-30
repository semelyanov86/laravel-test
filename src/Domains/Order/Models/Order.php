<?php
declare(strict_types=1);

namespace Domains\Order\Models;

use App\Models\User;
use Domains\Product\Models\Product;
use Parents\Models\Model;

final class Order extends Model
{
    protected $fillable = [
        'user_id', 'billing_email', 'billing_name', 'billing_address', 'billing_city',
        'billing_province', 'billing_postalcode', 'billing_phone', 'billing_name_on_card',
        'billing_discount', 'billing_discount_code', 'billing_subtotal', 'billing_tax',
        'billing_total', 'error'
    ];

    protected function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected function products(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }
}
