<?php

namespace App\Http\Requests\Api\Waiter;

use Illuminate\Foundation\Http\FormRequest;


class WaiterLoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required',
            'password' => 'required',
            'store_id' => 'required|exists:stores,id',
            // 'token' => 'required',
            // 'device' => 'required|in:android,ios',
        ];
    }

    public function attributes()
    {
        return [
            'store_id' => __('labels.backend.users.store_id'),
            'username' => __('labels.backend.users.username'),
            'password' => __('labels.backend.users.password'),
        ];
    }
}
