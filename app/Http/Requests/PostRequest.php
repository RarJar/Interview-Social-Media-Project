<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $rules = [
            'title' => ['required'],
            'body' => ['required'],
        ];
        return $rules;
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'user_id' => auth()->user() ? auth()->user()->id : null
        ]);
    }
}
