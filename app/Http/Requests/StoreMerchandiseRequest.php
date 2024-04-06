<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMerchandiseRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required','max:255'],
            'description' => ['required'],
            'price' => ['required','decimal:2','min:0','max:99999.99',],
            'image' => ['required','image','mimes:jpg,jpeg,png'],
            'stock_quantity' => ['required','numeric','min:0','max:99999'],
            'category' => ['required','in:cap,poster,bag'],
        ];
    }
}
