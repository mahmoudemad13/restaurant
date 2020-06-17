<?php

namespace App\Models\OrderItems;

use App\Models\OrderItemOptionValues\OrderItemOptionValue;
use App\Models\Orders\Order;
use App\Models\Products\Product;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasRoute;

class OrderItem extends Model
{
    use HasRoute;

    protected $fillable = [
        'order_id','product_id','status',
        'service_fees','vat','sub_total',
        'total_price'
    ];

    protected $routeName = 'admin.order-items';

    protected $with =['product'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function order_item_option_values()
    {
        return $this->hasMany(OrderItemOptionValue::class);
    }
}


