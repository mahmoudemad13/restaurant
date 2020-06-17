<?php

namespace App\Http\Controllers\Api\Order;

use App\Http\Controllers\Controller;
use App\Models\OrderAudiences\Repositories\OrderAudienceRepository;
use App\Models\OrderItemOptionValues\Repositories\OrderItemOptionValueRepository;
use App\Models\OrderItems\Repositories\OrderItemRepository;
use App\Models\Orders\Repositories\OrderRepository;
use App\Models\ProductOptionValues\Repositories\ProductOptionValueRepository;
use App\Models\Stores\Repositories\StoreRepository;

class OrderController extends Controller
{

    private $orderRepository;
    private $orderItemRepository;
    private $orderAudienceRepository;
    private $orderItemOptionValueRepository;

    public function __construct(
        OrderRepository $orderRepository,
        OrderItemRepository $orderItemRepository,
        OrderAudienceRepository $orderAudienceRepository,
        OrderItemOptionValueRepository $orderItemOptionValueRepository
    )
    {
        $this->orderRepository = $orderRepository;
        $this->orderItemRepository = $orderItemRepository;
        $this->orderAudienceRepository = $orderAudienceRepository;
        $this->orderItemOptionValueRepository = $orderItemOptionValueRepository;
    }

    public function search($store_id)
    {
        $data = $this->orderRepository->apiSearch($store_id, request('table_id'));
        return jsonResponse(['data' => $data]);
    }

    public function getMine($store_id)
    {
        $data = $this->orderRepository->apiGetMine($store_id);
        return jsonResponse(['data' => $data]);
    }

    public function create($store_id)
    {
//        $order = $this->orderRepository->create([
//            'store_id' => $store_id,
//            'table_id' => request("table_id"),
//            'type' => 1,
//        ]);

        //        app(OrderAudienceRepository::class)->create([
//            "order_id" => $order->id,
//            "waiter_id" => auth("user")->id()
//        ]);

//        $order_item = app(OrderItemRepository::class)->create([
//            "order_id" => $order->id,
//            "product_id" => request("product_id"),
//        ]);

        //        app(OrderItemOptionValueRepository::class)->create([
//            "order_item_id" => $order_item->id,
//            "product_option_value_id" => $product_option_value->id,
//            "price" => $product_option_value->price,
//        ]);

        //        $order_item->update([
//            "service_fees" => $order_item_service_fees,
//            "vat" => $order_item_vat,
//            "sub_total" => $order_item_sub_total,
//            "total_price" => $order_item_total_price,
//        ]);

//        $order_total_price = app(OrderItem::class)->where("order_id",$order->id)->sum("total_price");  $order_sub_total = app(OrderItem::class)->where("order_id",$order->id)->sum("sub_total");
//        $order_service_fees = app(OrderItem::class)->where("order_id",$order->id)->sum("service_fees");
//        $order_vat = app(OrderItem::class)->where("order_id",$order->id)->sum("vat");
//        $order_total_price = app(OrderItem::class)->where("order_id",$order->id)->sum("total_price");


//        $order->update([
//            "service_fees" => $order_service_fees,
//            "vat" => $order_vat,
//            "sub_total" => $order_sub_total,
//            "total_price" => $order_total_price,
//        ]);

//        $product_option_value = app(ProductOptionValueRepository::class)
//            ->where("id", request("product_option_value_id"))
//            ->first();
//
//
//
//        $this->orderItemOptionValueRepository->apiCreate($order_item, $product_option_value);


//        $order_item_totals['order_item_sub_total'] = app(OrderItemOptionValueRepository::class)->where("order_item_id", $order_item->id)->sum("price");
//        $order_item_totals['order_item_service_fees'] = $order_item_totals['order_item_sub_total'] * 0.01 * $store_config->service_fees;
//        $order_item_totals['order_item_vat'] = $order_item_totals['order_item_sub_total'] * 0.01 * $store_config->vat;
//
//        $order_item_totals['order_item_total_price'] = $order_item_totals['order_item_sub_total'] + $order_item_totals['order_item_service_fees'] + $order_item_totals['order_item_vat'];

//        $order_totals['order_sub_total'] = $this->orderItemRepository->where("order_id", $order->id)->sum("sub_total");
//        $order_totals['order_service_fees'] = $this->orderItemRepository->where("order_id", $order->id)->sum("service_fees");
//        $order_totals['order_vat'] = $this->orderItemRepository->where("order_id", $order->id)->sum("vat");
//
//        $order_totals['order_total_price'] = $order_totals['order_sub_total'] + $order_totals['order_service_fees'] + $order_totals['order_vat'];

        $order = $this->orderRepository->apiCreate($store_id, request('table_id'));


        $this->orderAudienceRepository->apiCreate($order->id);


        $order_item = $this->orderItemRepository->apiCreate($order->id, request('product_id'));

        foreach(request("product_option_value_id") as $product_option_value_id)
        {
            $product_option_value = app(ProductOptionValueRepository::class)
                ->where("id", $product_option_value_id)
                ->first();


            $this->orderItemOptionValueRepository->apiCreate($order_item, $product_option_value);
        }


        $store_config = app(StoreRepository::class)->where("id", $store_id)->first();

        $order_item_totals = $this->orderItemRepository->apiGetTotals($order_item,$store_config);

        $this->orderItemRepository->apiUpdateTotals($order_item,$order_item_totals);

        $order_totals = $this->orderRepository->apiGetTotals($order->id);



        $this->orderRepository->apiUpdateTotals($order->id, $order_totals);


        $data = $this->orderRepository->where("id", $order->id)
            ->with('items.order_item_option_values.product_option_value')
            ->get();

        return jsonResponse(['data' => $data]);
    }
}
