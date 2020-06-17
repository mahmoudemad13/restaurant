<?php

namespace App\Http\Controllers\Backend\Category;

use App\Http\Controllers\Backend\CustomController;
use App\Models\Categories\Repositories\CategoryRepository;
use App\Models\Categories\Requests\StoreCategoryRequest;
use App\Models\Categories\Requests\UpdateCategoryRequest;


class CategoryController extends CustomController
{
    protected $view = 'backend.categories';

    protected $route = 'admin.categories';

    protected $storeRequestFile = StoreCategoryRequest::class;

    protected $updateRequestFile = UpdateCategoryRequest::class;

    public function __construct(CategoryRepository $repository)
    {
        parent::__construct($repository);
    }

}


