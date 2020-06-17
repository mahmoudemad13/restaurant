<?php

namespace App\Http\Controllers\Backend\OrderItem;

use App\Http\Controllers\Backend\CustomController;
use App\Models\OrderItems\Repositories\OrderItemRepository;
use App\Models\OrderItems\Requests\StoreOrderItemRequest;
use App\Models\OrderItems\Requests\UpdateOrderItemRequest;


class OrderItemController extends CustomController
{
    protected $view = 'backend.orderitems';

    protected $route = 'admin.orderitems';

    protected $storeRequestFile = StoreOrderItemRequest::class;

    protected $updateRequestFile = UpdateOrderItemRequest::class;

    public function __construct(OrderItemRepository $repository)
    {
        parent::__construct($repository);
    }

}


