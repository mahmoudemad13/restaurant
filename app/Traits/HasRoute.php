<?php

namespace App\Traits;

use App\Presenters\UrlPresenter;

trait HasRoute
{

    public function initialzeHasRoute()
    {
        $this->append('url');
    }

    public function getUrlAttribute()
    {
        return new UrlPresenter($this, $this->routeName);
    }
}
