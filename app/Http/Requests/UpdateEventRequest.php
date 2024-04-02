<?php

namespace App\Http\Requests;

use App\Models\Event;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateEventRequest extends FormRequest
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
            'title' => [
                'required',
                'string',
                'max:255',
                Rule::unique('events')->ignore($this->event),
            ],
            'description' => 'required|string',
            'startDate' => 'required|date|after:today',
            'endDate' => 'required|date|after_or_equal:startDate',
            'noOfTeams' => 'required|integer|min:2|max:32',
            'location' => 'required|string|max:255',
            'deadline' => 'required|date|before:startDate|after_or_equal:today',
            'fees' => 'required|decimal:2|min:0|max:9999.99',
        ];
    }
}
