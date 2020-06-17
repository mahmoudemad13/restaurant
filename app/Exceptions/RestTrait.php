<?php

namespace App\Exceptions;

trait RestTrait
{
    /**
     * Determines if request is an api call.
     *
     * If the request URI contains '/api/v'.
     *
     * @param Request $request
     * @return bool
     */
    protected function isApiCall()
    {
        return strpos(request()->getUri(), '/api/v') !== false;
    }
}
