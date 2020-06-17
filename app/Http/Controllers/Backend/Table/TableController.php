<?php

namespace App\Http\Controllers\Backend\Table;

use App\Http\Controllers\Backend\CustomController;
use App\Models\Tables\Repositories\TableRepository;
use App\Models\Tables\Requests\StoreTableRequest;
use App\Models\Tables\Requests\UpdateTableRequest;


class TableController extends CustomController
{
    protected $view = 'backend.tables';

    protected $route = 'admin.tables';

    protected $storeRequestFile = StoreTableRequest::class;

    protected $updateRequestFile = UpdateTableRequest::class;

    public function __construct(TableRepository $repository)
    {
        parent::__construct($repository);
    }

}


