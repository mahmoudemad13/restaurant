<?php

namespace App\Models\Stores\Repositories;

use App\Models\Stores\Store;
use App\Repositories\BaseRepository;

class StoreRepository extends BaseRepository
{

  //    protected $with = [''];

	public function __construct(Store $store)
    {
        $this->model = $store;
    }

    public function createData()
    {
        return [
//            'example' => app(ExampleRepository::class)->all(),
        ];
    }

    public function editData($id)
    {
        $data = parent::editData($id);

//        $data['example'] = app(ExampleRepository::class)->all();

        return $data;
    }

}

