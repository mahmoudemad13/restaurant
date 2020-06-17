<?php

namespace App\Responses;

use Illuminate\Contracts\Support\Responsable;


class GeneralIndexResponse implements Responsable
{

    protected $model;

    protected $view;

    public function __construct($model, $view)
    {
        $this->model = $model;

        $this->view = $view;
    }


    public function toResponse($request)
    {
        /*
        *    Check If Request Is Ajax
        *    If True We Call getWithDataTable Function In App\Repositories\BaseRepository
        *    If Not We Return View
        */

        if (request()->ajax()) {
            return $this->model->getWithDataTable();
        }

        return view($this->view . '.index');
    }
}
