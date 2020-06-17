<?php

namespace App\Models\OrderItemOptionValues\Requests;
use Illuminate\Foundation\Http\FormRequest;

class StoreOrderItemOptionValueRequest extends FormRequest
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
            '' => __('labels.backend.orderitemoptionvalues.'),
        ];
    }
}
