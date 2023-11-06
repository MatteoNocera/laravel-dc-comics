<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'bail|required|min:5|max:50',
            'description' => 'nullable',
            'price' => 'bail|required|max:10',
            'thumb' => 'nullable'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'title.required' => '👉 Inserisci un titolo per il nuovo Comic',
            'title.min:5' => '👉 Inserisci un titolo di almeno 5 caratteri per il nuovo Comic',
            'price.required' => '👉 Inserisci il prezzo del nuovo Comic',
        ];
    }
}
