<?php

namespace App\Models\OrderAudiences\Repositories;

use App\Models\OrderAudiences\OrderAudience;
use App\Repositories\BaseRepository;

class OrderAudienceRepository extends BaseRepository
{

  //    protected $with = [''];

	public function __construct(OrderAudience $orderaudience)
    {
        $this->model = $orderaudience;
    }

    public function apiCreate($order_id){
	    return $this->model->create([
	       'order_id' => $order_id,
           'waiter_id' => auth("user")->id()
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

