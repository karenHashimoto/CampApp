<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DatePost extends FormRequest
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
            'inDate' => 'required|after:+1 week',
            'outDate' => 'required|date|'
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
            'inDate.after' => 'ご予約はご利用日から7日前より可能です。',
            'outDate' => ''
        ];
    }
}
