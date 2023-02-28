<?php

namespace App\Http\Requests\Purchase;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'provider_id' => 'integer|requred|exists:App\Models\Provider,id',
            'user_id' => 'integer|requred|exists:App\Models\User,id',
            'purchase_date' => 'required',
            'tax' => 'required|decimal:2',
            'total' => 'required|decimal:2',
            'status' => Rule::in(['VALID', 'CANCELLED']),
            'image' => 'image|nullable',
        ];
    }
}
