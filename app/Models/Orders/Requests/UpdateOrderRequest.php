<?php

namespace App\Models\Orders\Requests;
use Illuminate\Foundation\Http\FormRequest;

class UpdateOrderRequest extends FormRequest
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
            '' => __('labels.backend.orders.'),
        ];
    }
}
