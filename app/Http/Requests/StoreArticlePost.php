<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticlePost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:200',
            'description' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'A title is required2. edited.',
            'title.max' => 'The title may not be greater than :max characters. edited.',
            'description.required'  => 'A message is required. edited.',
        ];
    }
}
