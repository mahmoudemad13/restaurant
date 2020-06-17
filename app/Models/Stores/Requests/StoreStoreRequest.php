<?php

namespace App\Models\Stores\Requests;
use Illuminate\Foundation\Http\FormRequest;

class StoreStoreRequest extends FormRequest
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
            '' => __('labels.backend.stores.'),
        ];
    }
}
