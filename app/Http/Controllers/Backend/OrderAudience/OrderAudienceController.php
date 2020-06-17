<?php

namespace App\Http\Controllers\Backend\OrderAudience;

use App\Http\Controllers\Backend\CustomController;
use App\Models\OrderAudiences\Repositories\OrderAudienceRepository;
use App\Models\OrderAudiences\Requests\StoreOrderAudienceRequest;
use App\Models\OrderAudiences\Requests\UpdateOrderAudienceRequest;


class OrderAudienceController extends CustomController
{
    protected $view = 'backend.orderaudiences';

    protected $route = 'admin.orderaudiences';

    protected $storeRequestFile = StoreOrderAudienceRequest::class;

    protected $updateRequestFile = UpdateOrderAudienceRequest::class;

    public function __construct(OrderAudienceRepository $repository)
    {
        parent::__construct($repository);
    }

}


