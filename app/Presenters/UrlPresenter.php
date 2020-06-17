<?php

namespace App\Presenters;

class UrlPresenter
{

    protected $model;

    protected $routeName;

    public function __construct($model, $routeName)
    {
        $this->model = $model;

        $this->routeName = $routeName;
    }

    public function __get($key)
    {
        if (method_exists($this, $key)) {
            return $this->$key();
        }

        return $this->$key;
    }

    public function delete()
    {
        return route($this->routeName . '.destroy', $this->model);
    }

    public function edit()
    {
        return route($this->routeName . '.edit', $this->model);
    }

    public function show()
    {
        return route($this->routeName . '.show', [1]);
    }

    public function update()
    {
        return route($this->routeName . '.update', $this->model);
    }
}
