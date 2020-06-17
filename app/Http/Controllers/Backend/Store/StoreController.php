<?php

namespace App\Http\Controllers\Backend\Store;

use App\Http\Controllers\Backend\CustomController;
use App\Models\Stores\Repositories\StoreRepository;
use App\Models\Stores\Requests\StoreStoreRequest;
use App\Models\Stores\Requests\UpdateStoreRequest;


class StoreController extends CustomController
{
    protected $view = 'backend.stores';

    protected $route = 'admin.stores';

    protected $storeRequestFile = StoreStoreRequest::class;

    protected $updateRequestFile = UpdateStoreRequest::class;

    public function __construct(StoreRepository $repository)
    {
        parent::__construct($repository);
    }

}


