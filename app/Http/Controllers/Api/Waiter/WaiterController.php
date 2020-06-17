<?php

namespace App\Http\Controllers\Api\Waiter;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Waiter\WaiterLoginRequest;
use App\Models\Waiters\Repositories\WaiterRepository;

class WaiterController extends Controller {

    private $waiterRepository;


    public function __construct(WaiterRepository $waiterRepository)
    {
        $this->waiterRepository = $waiterRepository;
    }

    public function login(WaiterLoginRequest $request){

        return $this->waiterRepository->apiLogin($request);
    }
}
