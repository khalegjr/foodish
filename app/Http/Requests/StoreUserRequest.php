<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'min:2', 'max:255'],
            'email' => ['required', 'email', 'string', 'unique:users', 'max:255'],
            'phone' => ['alpha_num', 'max:14', 'nullable'],
            'city' => ['string', 'max:255', 'nullable'],
            'state' => ['string', 'max:2', 'nullable']
        ];
    }
}
