<?php

namespace App\Models\Orders;

use App\Models\OrderAudiences\OrderAudience;
use App\Models\OrderItems\OrderItem;
use App\Models\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasRoute;

class Order extends Model
{
    use HasRoute;

    protected $fillable = [
        'store_id','table_id','type',
        'payment_method','status','service_fees',
        'vat','sub_total','total_price'
    ];

    protected $routeName = 'admin.orders';

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function table()
    {
        return $this->belongsTo(Table::class);
    }

    public function audience()
    {
        return $this->hasOne(OrderAudience::class);
    }
}


