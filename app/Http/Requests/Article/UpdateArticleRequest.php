<?php

namespace App\Http\Requests\Article;

use App\Models\Lang;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check() && auth()->user()->role === 'admin';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:191',
            'description' => 'nullable|max:191',
            'content' => 'nullable|string|max:65536',
            // 'lang_id' => 'required|' . Rule::exists(Lang::class, 'id'),
            'image' => 'nullable|mimes:png,jpg,jpeg,gif,svg',
        ];
    }
}
