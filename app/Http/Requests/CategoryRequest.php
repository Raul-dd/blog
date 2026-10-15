<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $slug = request()->isMethod('put') ? 'required|unique:categories,slug,'.$this->id : 'required|unique:categories';
        $image = request()->isMethod('put') ? 'nullable|image' : 'request|image';
        return [
            'name' => 'required|max;60',
            'slug' => $slug,
            'image' => $image,
            'is_featured' => 'required|boolean',
            'status' => 'required|boolean',
        ];
    }
}
