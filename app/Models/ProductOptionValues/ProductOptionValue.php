<?php

namespace App\Models\ProductOptionValues;

use App\Models\Options\Option;
use App\Models\ProductOptions\ProductOption;
use App\Models\Products\Product;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasRoute;

class ProductOptionValue extends Model
{
    use HasRoute;

    protected $fillable = [''];

    protected $routeName = 'admin.product-option-values';

    protected $with = ['product_option'];

//    public function option()
//    {
//        return $this->belongsTo(Option::Class);
//    }
//
//    public function product()
//    {
//        return $this->belongsTo(Product::class);
//    }

    public function product_option()
    {
        return $this->belongsTo(ProductOption::class);
    }
}


