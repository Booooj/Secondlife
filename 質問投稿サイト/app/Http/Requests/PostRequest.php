<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required|max:25',
            'content' => 'required|max:200'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'タイトルを入力してください',
            'title.max' => '25文字以内です。',
            
            'content.required' => '質問を入力してください',
            'content.max' => '質問は200文字以内です。',
           
        ];
    }
}
