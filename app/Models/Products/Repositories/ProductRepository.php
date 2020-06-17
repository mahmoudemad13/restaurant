<?php

namespace App\Models\Products\Repositories;

use App\Models\Products\Product;
use App\Repositories\BaseRepository;

class ProductRepository extends BaseRepository
{

  //    protected $with = [''];

	public function __construct(Product $product)
    {
        $this->model = $product;
    }

    public function apiGet($store_id){
	    return $this->model->where("store_id",$store_id)->get();
    }

    public function apiSearch($store_id,$category_id)
    {
        if($category_id){
            $data = $this->model->where('id',$category_id);
        }

        return $data->where('store_id',$store_id)->get();
    }

    public function apiShowBy($id)
    {
        return $this->model->where("id",$id)->with("options.option","options.values")->get();
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

