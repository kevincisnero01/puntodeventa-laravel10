<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'ci' => 'required|string|min:7|max:8|unique:clients',
            'rif' => 'required|string|size:10|unique:clients',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|min:7|max:12|unique:clients',
            'email' => 'required|email|max:255|unique:clients',
        ];
    }
}
