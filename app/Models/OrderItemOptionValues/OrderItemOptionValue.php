<?php

namespace App\Models\OrderItemOptionValues;

use App\Models\OrderItems\OrderItem;
use App\Models\ProductOptionValues\ProductOptionValue;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasRoute;

class OrderItemOptionValue extends Model
{
    use HasRoute;

    protected $fillable = ['order_item_id','product_option_value_id','price'];

    protected $routeName = 'admin.order-item-option-values';

    public function order_item()
    {
        return $this->belongsTo(OrderItem::class);
    }

    public function product_option_value()
    {
        return $this->belongsTo(ProductOptionValue::class);
    }
}


