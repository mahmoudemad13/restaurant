<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

trait RestExceptionHandlerTrait
{

    protected $errors = [];

    protected function getJsonResponseForException(Request $request, Exception $e)
    {
        switch (true) {
            case $this->isModelNotFoundException($e):
                $retval = $this->returnMessage('Invalid Data', 404);
                break;
            case $this->NotFoundException($e):
                $retval = $this->returnMessage('404 Not Found', 404);
                break;
            case $this->isValidationException($e):
                $this->errors = $e->errors();
                $retval = $this->returnMessage($e->getMessage(), 422);
                break;
            case $this->AuthenticationException($e):
                $retval = $this->returnMessage($e->getMessage(), 401);
                break;
            case $this->isMethodNotAllowedException($e):
                $retval = $this->returnMessage($e->getMessage(), 405);
                break;
            default:
                $retval = $this->returnMessage($e->getMessage(), 400);
        }

        return $retval;
    }

    protected function returnMessage($message, $statusCode)
    {
        return response()->json(['message' => $message ?: [], 'errors' => $this->errors], $statusCode, ['Access-Control-Allow-Origin' => '*'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }

    protected function isModelNotFoundException(Exception $e)
    {
        return $e instanceof ModelNotFoundException;
    }

    protected function NotFoundException(Exception $e)
    {
        return $e instanceof NotFoundHttpException;
    }

    protected function isValidationException(Exception $e)
    {
        return $e instanceof ValidationException;
    }

    protected function isMethodNotAllowedException(Exception $e)
    {
        return $e instanceof MethodNotAllowedHttpException;
    }

    protected function AuthenticationException(Exception $e)
    {
        return $e instanceof AuthenticationException;
    }

}
