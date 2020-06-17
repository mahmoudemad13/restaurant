<?php

namespace App\Http\Controllers\Api\OrderItem;

use App\Http\Controllers\Controller;
use App\Models\OrderAudiences\Repositories\OrderAudienceRepository;
use App\Models\OrderItemOptionValues\Repositories\OrderItemOptionValueRepository;
use App\Models\OrderItems\Repositories\OrderItemRepository;
use App\Models\Orders\Repositories\OrderRepository;
use App\Models\ProductOptionValues\Repositories\ProductOptionValueRepository;
use App\Models\Stores\Repositories\StoreRepository;
use Request;

class OrderItemController extends Controller
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

    public function get($item_id)
    {
        $data = $this->orderItemRepository->where("id", $item_id)
            ->with('order_item_option_values.product_option_value')
            ->first();
        return jsonResponse(['data' => $data]);
    }

    public function add($store_id)
    {

//
//        $product_option_value = app(ProductOptionValueRepository::class)
//            ->where("id", request("product_option_value_id"))
//            ->first();
//
//
//        $this->orderItemOptionValueRepository->apiCreate($order_item, $product_option_value);
//        $order_item_totals['order_item_sub_total'] = app(OrderItemOptionValueRepository::class)->where("order_item_id", $order_item->id)->sum("price");
//        $order_item_totals['order_item_service_fees'] = $order_item_totals['order_item_sub_total'] * 0.01 * $store_config->service_fees;
//        $order_item_totals['order_item_vat'] = $order_item_totals['order_item_sub_total'] * 0.01 * $store_config->vat;
//
//        $order_item_totals['order_item_total_price'] = $order_item_totals['order_item_sub_total'] + $order_item_totals['order_item_service_fees'] + $order_item_totals['order_item_vat'];
//        $order_totals['order_sub_total'] = $this->orderItemRepository->where("order_id", request()->order_id)->sum("sub_total");
//        $order_totals['order_service_fees'] = $this->orderItemRepository->where("order_id",  request()->order_id)->sum("service_fees");
//        $order_totals['order_vat'] = $this->orderItemRepository->where("order_id",  request()->order_id)->sum("vat");
//
//        $order_totals['order_total_price'] = $order_totals['order_sub_total'] + $order_totals['order_service_fees'] + $order_totals['order_vat'];

        $order_item = $this->orderItemRepository->apiCreate(request()->order_id, request()->product_id);


        foreach (request("product_option_value_id") as $product_option_value_id) {
            $product_option_value = app(ProductOptionValueRepository::class)
                ->where("id", $product_option_value_id)
                ->first();


            $this->orderItemOptionValueRepository->apiCreate($order_item, $product_option_value);
        }

        $store_config = app(StoreRepository::class)->where("id", $store_id)->first();

        $order_item_totals = $this->orderItemRepository->apiGetTotals($order_item, $store_config);


        $this->orderItemRepository->apiUpdateTotals($order_item, $order_item_totals);

        $order_totals = $this->orderRepository->apiGetTotals(request()->order_id);

        $this->orderRepository->apiUpdateTotals(request()->order_id, $order_totals);


        $data = $this->orderRepository->where("id", request()->order_id)
            ->with('items.order_item_option_values.product_option_value')
            ->get();

        return jsonResponse(['data' => $data]);
    }

    public function edit($store_id, $item_id)
    {
        $order_item = $this->orderItemRepository->where('id', $item_id)->first();
        if ($order_item->status <= 2) {
            foreach (request("product_option_value_id") as $product_option_value_id) {
                $checkIfExist = $this->orderItemOptionValueRepository
                    ->where("order_item_id", $order_item->id)
                    ->where("product_option_value_id", $product_option_value_id)
                    ->get();

                if ($checkIfExist->count() == 0) {
                    $product_option_value = app(ProductOptionValueRepository::class)
                        ->where("id", $product_option_value_id)
                        ->first();


                    $this->orderItemOptionValueRepository->apiCreate($order_item, $product_option_value);

                }
            }

            $orderItemOptionValues = $this->orderItemOptionValueRepository
                ->where("order_item_id", $order_item->id)
                ->get();

            foreach ($orderItemOptionValues as $orderItemOptionValue)
            {
                if(!in_array($orderItemOptionValue->product_option_value_id,request("product_option_value_id"))){
                    $orderItemOptionValue->delete();
                }
            }

            $store_config = app(StoreRepository::class)->where("id", $store_id)->first();

            $order_item_totals = $this->orderItemRepository->apiGetTotals($order_item, $store_config);

            $this->orderItemRepository->apiUpdateTotals($order_item, $order_item_totals);

            $order_totals = $this->orderRepository->apiGetTotals($order_item->order_id);

            $this->orderRepository->apiUpdateTotals($order_item->order_id, $order_totals);

            return jsonResponse([
                "message" => "item updated successfully!",
                "data" => $this->orderItemRepository->where('id', $item_id)
                    ->with('order_item_option_values.product_option_value')
                    ->first()

            ]);
        }

        return jsonResponse(['message' => 'Sorry , this item can not be updated due to status']);

    }

    public function delete($item_id)
    {
        $order_item = $this->orderItemRepository->where('id', $item_id)->first();

        if ($order_item->status <= 2) {

            $order_item->delete();

            $order_item_option_values = $this->orderItemOptionValueRepository->where('order_item_id', $item_id)->get();

            foreach ($order_item_option_values as $order_item_option_value) {
                $order_item_option_value->delete();
            }

            $checkLastItem = $this->orderItemRepository->where("order_id", $order_item->order_id)->get();

            if ($checkLastItem->count() == 0)
            {
                $this->orderRepository->deleteById($order_item->order_id);

                return jsonResponse([
                    "message" => "order has been deleted successfully!",
                ]);
            }else{

                $order_totals = $this->orderRepository->apiGetTotals($order_item->order_id);

                $this->orderRepository->apiUpdateTotals($order_item->order_id, $order_totals);

                return jsonResponse([
                    "message" => "item has been deleted successfully!",
                ]);
            }





        }

        return jsonResponse(['message' => 'Sorry , this item can not be deleted due to status']);
    }

}
