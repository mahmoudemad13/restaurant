<?php

namespace App\Http\Controllers\Backend\ProductOptionValue;

use App\Http\Controllers\Backend\CustomController;
use App\Models\ProductOptionValues\Repositories\ProductOptionValueRepository;
use App\Models\ProductOptionValues\Requests\StoreProductOptionValueRequest;
use App\Models\ProductOptionValues\Requests\UpdateProductOptionValueRequest;


class ProductOptionValueController extends CustomController
{
    protected $view = 'backend.productoptionvalues';

    protected $route = 'admin.productoptionvalues';

    protected $storeRequestFile = StoreProductOptionValueRequest::class;

    protected $updateRequestFile = UpdateProductOptionValueRequest::class;

    public function __construct(ProductOptionValueRepository $repository)
    {
        parent::__construct($repository);
    }

}


