<?php

namespace App\Http\Controllers\Api\Table;

use App\Http\Controllers\Controller;
use App\Models\Tables\Repositories\TableRepository;

class TableController extends Controller {

    private $tableRepository;

    public function __construct(TableRepository $tableRepository)
    {
        $this->tableRepository = $tableRepository;
    }

    public function get($store_id)
    {
        $data = $this->tableRepository->apiGet($store_id);

        return jsonResponse(['data' => $data]);

    }

    public function search($store_id)
    {
        $data = $this->tableRepository->apiSearch($store_id,request('table_id'));

        return jsonResponse(['data' => $data]);

    }

    public function open($store_id,$table_id)
    {
        return $this->tableRepository->apiOpen($store_id,$table_id);

    }

    public function close($store_id,$table_id)
    {
        return $this->tableRepository->apiClose($store_id,$table_id);

    }

}
