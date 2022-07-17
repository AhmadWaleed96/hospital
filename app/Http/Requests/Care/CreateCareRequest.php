<?php

namespace App\Http\Requests\Care;

use Illuminate\Foundation\Http\FormRequest;

class CreateCareRequest extends FormRequest
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
            'email' => 'unique:users,email,NULL,id,type,care'
        ];
    }
}
