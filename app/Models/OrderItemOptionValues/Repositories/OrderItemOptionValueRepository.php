<?php

namespace App\Models\OrderItemOptionValues\Repositories;

use App\Models\OrderItemOptionValues\OrderItemOptionValue;
use App\Repositories\BaseRepository;

class OrderItemOptionValueRepository extends BaseRepository
{

  //    protected $with = [''];

	public function __construct(OrderItemOptionValue $orderitemoptionvalue)
    {
        $this->model = $orderitemoptionvalue;
    }

    public function apiCreate($order_item,$product_option_value)
    {
        return $this->model->create([
            "order_item_id" => $order_item->id,
            "product_option_value_id" => $product_option_value->id,
            "price" => $product_option_value->price,
        ]);
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

