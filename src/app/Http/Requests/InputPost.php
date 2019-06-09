<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InputPost extends FormRequest
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
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required'
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
            'name' => '必須項目です。',
            'email' => '必須項目です。',
            'phone' => '必須項目です。'
        ];
    }
}
