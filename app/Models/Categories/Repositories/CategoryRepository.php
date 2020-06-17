<?php

namespace App\Models\Categories\Repositories;

use App\Models\Categories\Category;
use App\Repositories\BaseRepository;

class CategoryRepository extends BaseRepository
{

  //    protected $with = [''];

	public function __construct(Category $category)
    {
        $this->model = $category;
    }

    public function apiGetWithProducts($store_id)
    {
        return $this->model->where('store_id',$store_id)
            ->with('products')
            ->get(["id","store_id","name"]);

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

