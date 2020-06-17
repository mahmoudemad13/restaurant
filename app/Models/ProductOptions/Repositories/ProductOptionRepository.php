<?php

namespace App\Models\ProductOptions\Repositories;

use App\Models\ProductOptions\ProductOption;
use App\Repositories\BaseRepository;

class ProductOptionRepository extends BaseRepository
{

  //    protected $with = [''];

	public function __construct(ProductOption $productoption)
    {
        $this->model = $productoption;
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

