<?php

namespace App\Models\Products;

use App\Models\Options\Option;
use App\Models\ProductOptions\ProductOption;
use App\Models\ProductOptionValues\ProductOptionValue;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasRoute;

class Product extends Model
{
    use HasRoute;

    protected $fillable = [''];

    protected $routeName = 'admin.products';

//    public function options()
//    {
//        return $this->belongsToMany(Option::class,'product_option_values','product_id','option_id');
//    }

    public function options()
    {
        return $this->hasMany(ProductOption::class);
    }

//    public function options_values()
//    {
//        return $this->hasMany(ProductOptionValue::class);
//    }
}


