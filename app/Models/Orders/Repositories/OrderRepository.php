<?php

namespace App\Models\Orders\Repositories;

use App\Models\OrderItems\Repositories\OrderItemRepository;
use App\Models\Orders\Order;
use App\Repositories\BaseRepository;

class OrderRepository extends BaseRepository
{

    //    protected $with = [''];

    public function __construct(Order $order)
    {
        $this->model = $order;
    }

    public function apiSearch($store_id, $table_id)
    {
        return $this->model
            ->where('store_id', $store_id)
            ->where("table_id", $table_id)
            ->with('items.order_item_option_values.product_option_value')
            ->get();
    }

    public function apiGetMine($store_id)
    {
        return $this->model
            ->where('store_id', $store_id)
            ->whereHas('audience', function ($q) {
                $q->where("waiter_id", auth("user")->id());
            })
            ->with('items.order_item_option_values.product_option_value')
            ->get();
    }

    public function apiCreate($store_id, $table_id)
    {
        return $this->model->create([
            'store_id' => $store_id,
            'table_id' => $table_id,
            'type' => 1,
        ]);
    }

    public function apiGetTotals($order_id)
    {
        $order_totals['order_sub_total'] = app(OrderItemRepository::class)->where("order_id", $order_id)->sum("sub_total");
        $order_totals['order_service_fees'] = app(OrderItemRepository::class)->where("order_id",  $order_id)->sum("service_fees");
        $order_totals['order_vat'] = app(OrderItemRepository::class)->where("order_id",  $order_id)->sum("vat");

        $order_totals['order_total_price'] = $order_totals['order_sub_total'] + $order_totals['order_service_fees'] + $order_totals['order_vat'];
        return $order_totals;
    }

    public function apiUpdateTotals($id,$totals)
    {
        return $this->model->where("id", $id)->first()->update([
            "service_fees" => $totals['order_service_fees'],
            "vat" => $totals['order_vat'],
            "sub_total" => $totals['order_sub_total'],
            "total_price" => $totals['order_total_price'],

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

