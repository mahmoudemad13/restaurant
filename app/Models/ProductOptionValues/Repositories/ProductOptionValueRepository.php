<?php

namespace App\Models\ProductOptionValues\Repositories;

use App\Models\ProductOptionValues\ProductOptionValue;
use App\Repositories\BaseRepository;

class ProductOptionValueRepository extends BaseRepository
{

  //    protected $with = [''];

	public function __construct(ProductOptionValue $productoptionvalue)
    {
        $this->model = $productoptionvalue;
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

