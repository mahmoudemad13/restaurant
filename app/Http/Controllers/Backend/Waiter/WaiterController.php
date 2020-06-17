<?php

namespace App\Http\Controllers\Backend\Waiter;

use App\Http\Controllers\Backend\CustomController;
use App\Models\Waiters\Repositories\WaiterRepository;
use App\Models\Waiters\Requests\StoreWaiterRequest;
use App\Models\Waiters\Requests\UpdateWaiterRequest;


class WaiterController extends CustomController
{
    protected $view = 'backend.waiters';

    protected $route = 'admin.waiters';

    protected $storeRequestFile = StoreWaiterRequest::class;

    protected $updateRequestFile = UpdateWaiterRequest::class;

    public function __construct(WaiterRepository $repository)
    {
        parent::__construct($repository);
    }

}


