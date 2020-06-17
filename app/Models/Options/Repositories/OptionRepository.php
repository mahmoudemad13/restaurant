<?php

namespace App\Models\Options\Repositories;

use App\Models\Options\Option;
use App\Repositories\BaseRepository;

class OptionRepository extends BaseRepository
{

  //    protected $with = [''];

	public function __construct(Option $option)
    {
        $this->model = $option;
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

