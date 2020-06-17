<?php

namespace App\Http\Controllers\Backend\ProductOption;

use App\Http\Controllers\Backend\CustomController;
use App\Models\ProductOptions\Repositories\ProductOptionRepository;
use App\Models\ProductOptions\Requests\StoreProductOptionRequest;
use App\Models\ProductOptions\Requests\UpdateProductOptionRequest;


class ProductOptionController extends CustomController
{
    protected $view = 'backend.productoptions';

    protected $route = 'admin.productoptions';

    protected $storeRequestFile = StoreProductOptionRequest::class;

    protected $updateRequestFile = UpdateProductOptionRequest::class;

    public function __construct(ProductOptionRepository $repository)
    {
        parent::__construct($repository);
    }

}


