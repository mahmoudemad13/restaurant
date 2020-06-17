<?php

namespace App\Models\Waiters\Requests;
use Illuminate\Foundation\Http\FormRequest;

class StoreWaiterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {

        $validation[''] = '';

        return $validation;

    }

    public function attributes()
    {
        return [
            '' => __('labels.backend.waiters.'),
        ];
    }
}
