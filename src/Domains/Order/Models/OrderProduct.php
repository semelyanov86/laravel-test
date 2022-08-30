<?php
declare(strict_types=1);

namespace Domains\Order\Models;

use Parents\Models\Model;

class OrderProduct extends Model
{
    protected $table = 'order_product';
    protected $fillable = ['product_id', 'order_id', 'quantity'];
}
