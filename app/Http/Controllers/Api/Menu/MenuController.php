<?php

namespace App\Http\Controllers\Api\Menu;

use App\Http\Controllers\Controller;
use App\Models\Categories\Repositories\CategoryRepository;
use App\Models\Products\Repositories\ProductRepository;

class MenuController extends Controller{
    private $categoryRepository;
    private $productRepository;

    public function __construct(
        CategoryRepository $categoryRepository,
        ProductRepository $productRepository
    )
    {
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
    }

    public function get($store_id)
    {
        $data = $this->categoryRepository->apiGetWithProducts($store_id);
        return jsonResponse(['data' => $data]);
    }
}
