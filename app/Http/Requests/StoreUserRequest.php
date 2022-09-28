<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

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
            'phone' => ['nullable', 'telefone_com_ddd', 'max:14'],
            'city' => ['nullable', 'string', 'max:255'],
            'state' => ['nullable', 'uf', 'max:2']
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nome',
            'email' => 'email',
            'phone' => 'telefone',
            'city' => 'cidade',
            'state' => 'estado'
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'message' => 'Validation errors',
            'data' => $validator->errors()
        ]));
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo :attribute é requerido.',
            'name.string' => 'O campo :attribute é inválido',
            'name.min' => 'O campo :attribute deve ser maior que 2.',
            'name.max' => 'O campo :attribute deve ser menor que 255.',
            'email.required' => 'O campo :attribute é requerido.',
            'email.email' => 'O campo :attribute é inválido',
            'email.string' => 'O campo :attribute é inválido',
            'email.unique' => 'O :attribute já está cadastrado.',
            'email.max' => 'O campo :attribute deve ser menor que 255.',
            'phone.telefone_com_ddd' => "Formato de telefone inválido. Use o formato (99)9999-9999, ou similar. ",
            'phone.max' => 'O campo :attribute deve ser menor ou igual a 14.',
            'city.string' => 'O campo :attribute é inválido.',
            'city.max' => 'O campo :attribute deve ser menor que 255.',
            'state.uf' => 'Estado inválido.',
            'state.max' => 'O campo :attribute deve ser igual à 2.',
        ];
    }
}
