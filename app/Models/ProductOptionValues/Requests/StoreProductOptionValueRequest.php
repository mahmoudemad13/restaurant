<?php

namespace App\Models\ProductOptionValues\Requests;
use Illuminate\Foundation\Http\FormRequest;

class StoreProductOptionValueRequest extends FormRequest
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
            '' => __('labels.backend.productoptionvalues.'),
        ];
    }
}
