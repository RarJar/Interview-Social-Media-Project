<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $rules = [
            'text' => ['required']
        ];
        return $rules;
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'user_id' => auth()->user() ? auth()->user()->id : null,
        ]);
    }
}
