<?php

namespace App\Models\OrderAudiences\Requests;
use Illuminate\Foundation\Http\FormRequest;

class UpdateOrderAudienceRequest extends FormRequest
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
            '' => __('labels.backend.orderaudiences.'),
        ];
    }
}
