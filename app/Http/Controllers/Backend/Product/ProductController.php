<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Backend\CustomController;
use App\Models\Products\Repositories\ProductRepository;
use App\Models\Products\Requests\StoreProductRequest;
use App\Models\Products\Requests\UpdateProductRequest;


class ProductController extends CustomController
{
    protected $view = 'backend.products';

    protected $route = 'admin.products';

    protected $storeRequestFile = StoreProductRequest::class;

    protected $updateRequestFile = UpdateProductRequest::class;

    public function __construct(ProductRepository $repository)
    {
        parent::__construct($repository);
    }

}


