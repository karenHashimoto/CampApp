<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PeoplePost extends FormRequest
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
            'adult_number' => 'required|integer|between:1,5',
            'child_number' => 'required|integer|between:0,2'
        ];
    }

    /**
     * 定義済みバリデーションルールのエラーメッセージ取得
     *
     * @return array
     */
    public function messages()
    {
        return [
            'adult_number.between' => '大人は5人までです！！',
            'child_number.between' => 'ちゃんといれてね！'
        ];
    }
}
