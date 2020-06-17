<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Repositories\RepositoryContract;
use App\Responses\GeneralIndexResponse;

class CustomController extends Controller
{

    // determine which route we need
    protected $route;

    // determine which view we need
    protected $view;

    // determine which repository we use
    protected $model;

    // determine which folder we use BY EMAD
    protected $folder;

    // determine which Response Interface We Use To Control Response In Index Fuction (Illuminate\Contracts\Support\Responsable)
    protected $indexResponse = GeneralIndexResponse::class;

    // determine which FormRequest Use In Store
    protected $storeRequestFile;

    // determine which FormRequest Use In Update
    protected $updateRequestFile;


    public function __construct(RepositoryContract $repository)
    {
        $this->model = $repository;
        $this->folder = substr($this->view, strrpos($this->view, '.') + 1);
    }

    public function index()
    {
        return app($this->indexResponse, ['model' => $this->model, 'view' => $this->view]);
    }

    public function create()
    {
        return view($this->view . '.create')->with($this->model->createData());
    }

    public function store()
    {
        app($this->storeRequestFile);
        $this->model->create(request()->all());

        return redirect()->route($this->route . '.index')->withFlashSuccess(__('alerts.backend.'. $this->folder .'.created'));
    }

    public function edit($id)
    {
        return view($this->view . '.edit')->with($this->model->editData($id));
    }

    public function update($id)
    {
//        dd(request()->all());

        app($this->updateRequestFile);
        $this->model->updateById($id, request()->all());

        return redirect()->route($this->route . '.index')->withFlashSuccess(__('alerts.backend.'. $this->folder .'.updated'));
    }

    public function destroy($id)
    {
        $this->model->deleteById($id);

        return redirect()->route($this->route . '.index')->withFlashSuccess(__('alerts.backend.'. $this->folder .'.deleted'));
    }
}
