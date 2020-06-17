<?php

namespace App\Http\Controllers\Backend\Option;

use App\Http\Controllers\Backend\CustomController;
use App\Models\Options\Repositories\OptionRepository;
use App\Models\Options\Requests\StoreOptionRequest;
use App\Models\Options\Requests\UpdateOptionRequest;


class OptionController extends CustomController
{
    protected $view = 'backend.options';

    protected $route = 'admin.options';

    protected $storeRequestFile = StoreOptionRequest::class;

    protected $updateRequestFile = UpdateOptionRequest::class;

    public function __construct(OptionRepository $repository)
    {
        parent::__construct($repository);
    }

}


