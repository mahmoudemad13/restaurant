<?php

namespace App\Models\ProductOptions;

use App\Models\Options\Option;
use App\Models\ProductOptionValues\ProductOptionValue;
use App\Models\Products\Product;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasRoute;

class ProductOption extends Model
{
    use HasRoute;

    protected $fillable = [''];

    protected $routeName = 'admin.product-options';

    protected $with = ['option'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function option()
    {
        return $this->belongsTo(Option::class);
    }

    public function values()
    {
        return $this->hasMany(ProductOptionValue::class);
    }
}


