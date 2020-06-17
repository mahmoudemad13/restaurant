<?php

namespace App\Models\OrderItems\Repositories;

use App\Models\OrderItemOptionValues\Repositories\OrderItemOptionValueRepository;
use App\Models\OrderItems\OrderItem;
use App\Repositories\BaseRepository;

class OrderItemRepository extends BaseRepository
{

  //    protected $with = [''];

	public function __construct(OrderItem $orderitem)
    {
        $this->model = $orderitem;
    }

    public function apiGetTotals($order_item,$store_config)
    {
        $order_item_totals['order_item_sub_total'] = app(OrderItemOptionValueRepository::class)
            ->where("order_item_id", $order_item->id)
            ->sum("price");
        $order_item_totals['order_item_service_fees'] = $order_item_totals['order_item_sub_total'] * 0.01 * $store_config->service_fees;
        $order_item_totals['order_item_vat'] = $order_item_totals['order_item_sub_total'] * 0.01 * $store_config->vat;

        $order_item_totals['order_item_total_price'] = $order_item_totals['order_item_sub_total'] + $order_item_totals['order_item_service_fees'] + $order_item_totals['order_item_vat'];

        return $order_item_totals;
    }

    public function apiCreate($order_id,$product_id)
    {
        return $this->model->create([
            "order_id" => $order_id,
            "product_id" => $product_id,
        ]);
    }

    public function apiUpdateTotals($order_item,$totals)
    {
        return $this->model->where('id',$order_item->id)->first()->update([
            "service_fees" => $totals['order_item_service_fees'],
            "vat" => $totals['order_item_vat'],
            "sub_total" => $totals['order_item_sub_total'],
            "total_price" => $totals['order_item_total_price'],
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

