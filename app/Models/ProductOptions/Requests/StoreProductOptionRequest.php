<?php

namespace App\Models\ProductOptions\Requests;
use Illuminate\Foundation\Http\FormRequest;

class StoreProductOptionRequest extends FormRequest
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
            '' => __('labels.backend.productoptions.'),
        ];
    }
}
