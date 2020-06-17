<?php

namespace App\Models\Options;

use App\Models\ProductOptionValues\ProductOptionValue;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasRoute;

class Option extends Model
{
    use HasRoute;

    protected $fillable = [''];

    protected $routeName = 'admin.options';

    public function values()
    {
        return $this->hasMany(ProductOptionValue::class);
    }
}


