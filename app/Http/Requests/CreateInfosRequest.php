<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateInfosRequest extends FormRequest
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
            'age' => 'required|numeric|digits:2',
            'comment' => 'required|max:140',
        ];
    }

    public function messages()
    {
        return [
            'age.required' => '入力必須です。',
            'age.numeric' => '数字のみの入力でお願いします。',
            'age.digits' => '最大２桁までの入力でお願いします。',
            'comment.required' => '入力必須です。',
            'comment.max' => '最大140字までの入力でお願いします。',
        ];
    }
}
