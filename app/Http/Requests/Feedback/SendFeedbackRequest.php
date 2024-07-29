<?php

namespace App\Http\Requests\Feedback;

use Illuminate\Foundation\Http\FormRequest;

class SendFeedbackRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'question' => 'nullable|in:Order project,Get answer',
            'service' => 'nullable|in:Interior,Exterior,Product rendering,Modelling,Animation',
            'message' => 'required',
            'file' => 'nullable|file'
        ];
    }
}
