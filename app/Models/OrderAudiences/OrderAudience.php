<?php

namespace App\Models\OrderAudiences;

use Illuminate\Database\Eloquent\Model;
use App\Traits\HasRoute;

class OrderAudience extends Model
{
    use HasRoute;

    protected $table = 'order_audience';

    protected $fillable = ['order_id','waiter_id'];

    protected $routeName = 'admin.order-audiences';
}


