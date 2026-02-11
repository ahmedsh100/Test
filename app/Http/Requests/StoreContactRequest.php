<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
            "first_name"=>"required|string|max:8",
            "last_name"=>"required|string|max:8",
            "email"=>"required|email|max:25",
            "message"=>"required|max:80",
            "category_id"=>"required|exists:categories,id",
        ];
    }
    public function messages()
    {
        return [
            "first_name.required"=>"Field",
        ];
    }
}
