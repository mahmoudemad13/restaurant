<?php

namespace App\Http\Controllers\Backend\Order;

use App\Http\Controllers\Backend\CustomController;
use App\Models\Orders\Repositories\OrderRepository;
use App\Models\Orders\Requests\StoreOrderRequest;
use App\Models\Orders\Requests\UpdateOrderRequest;


class OrderController extends CustomController
{
    protected $view = 'backend.orders';

    protected $route = 'admin.orders';

    protected $storeRequestFile = StoreOrderRequest::class;

    protected $updateRequestFile = UpdateOrderRequest::class;

    public function __construct(OrderRepository $repository)
    {
        parent::__construct($repository);
    }

}


