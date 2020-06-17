<?php

namespace App\Http\Controllers\Api\Product;

use App\Http\Controllers\Controller;
use App\Models\Categories\Repositories\CategoryRepository;
use App\Models\Products\Repositories\ProductRepository;

class ProductController extends Controller{
    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function get($store_id)
    {
        $data = $this->productRepository->apiGet($store_id);
        return jsonResponse(['data' => $data]);
    }

    public function search($store_id)
    {
        $data = $this->productRepository->apiSearch($store_id,request("category_id"));
        return jsonResponse(['data' => $data]);
    }

    public function show($id)
    {
        $data = $this->productRepository->apiShowBy($id);
        return jsonResponse(['data' => $data]);
    }
}
