<?php

namespace App\Http\Controllers\Backend\OrderItemOptionValue;

use App\Http\Controllers\Backend\CustomController;
use App\Models\OrderItemOptionValues\Repositories\OrderItemOptionValueRepository;
use App\Models\OrderItemOptionValues\Requests\StoreOrderItemOptionValueRequest;
use App\Models\OrderItemOptionValues\Requests\UpdateOrderItemOptionValueRequest;


class OrderItemOptionValueController extends CustomController
{
    protected $view = 'backend.orderitemoptionvalues';

    protected $route = 'admin.orderitemoptionvalues';

    protected $storeRequestFile = StoreOrderItemOptionValueRequest::class;

    protected $updateRequestFile = UpdateOrderItemOptionValueRequest::class;

    public function __construct(OrderItemOptionValueRepository $repository)
    {
        parent::__construct($repository);
    }

}


