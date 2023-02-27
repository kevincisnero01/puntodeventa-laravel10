<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'string|required|max:255|unique:products',
            'image' => 'required|image|dimensions:min_width=100,min_height=200',
            'sell_price' => 'required',
            'category_id' => 'integer|requred|exists:App\Models\Category,id',
            'provider_id' => 'integer|requred|exists:App\Models\Provider,id',
        ];
    }
}
