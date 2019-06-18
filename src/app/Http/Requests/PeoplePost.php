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
            'adult_number' => 'required|integer|between:1,2',
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
            'adult_number.between' => '3名以上お申し込みの場合は2名でご予約頂き、備考欄にご希望人数をご記入ください。',
            'child_number.between' => '子どもは2名まで添い寝可能です。'
        ];
    }
}
