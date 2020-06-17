<?php

namespace App\Models\Tables\Repositories;

use App\Models\Tables\Table;
use App\Repositories\BaseRepository;

class TableRepository extends BaseRepository
{

  //    protected $with = [''];

	public function __construct(Table $table)
    {
        $this->model = $table;
    }

    public function apiGet($store_id)
    {
        return $this->model->where('store_id',$store_id)->get();
    }

    public function apiSearch($store_id,$table_id)
    {
        if($table_id){
             $data = $this->model->where('id',$table_id);
        }

        return $data->where('store_id',$store_id)->get();
    }

    public function apiOpen($store_id,$table_id)
    {
        $table = $this->model->where('store_id',$store_id)->where('id',$table_id)->first();
        if($table->available == 0){
           $table->update([
                'available' => 1
            ]);
            return jsonResponse(['message' => 'table is opened successfully!']);
        }
        return jsonResponse(['message' => 'table is already opened!']);
    }

    public function apiClose($store_id,$table_id)
    {
        $table = $this->model->where('store_id',$store_id)->where('id',$table_id)->first();
        if($table->available == 1){
            $table->update([
                'available' => 0
            ]);
            return jsonResponse(['message' => 'table is closed successfully!']);
        }
        return jsonResponse(['message' => 'table is already closed!']);
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

