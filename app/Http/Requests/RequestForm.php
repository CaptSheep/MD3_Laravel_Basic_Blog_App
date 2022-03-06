<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestForm extends FormRequest
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
            'name'=>'required|min:4|max:50',
            'title'=>'required|min:10|max:100',
            'content'=>'required|min:50|max:255'
        ];
    }

    public function messages()
    {
        $message = [
            'name.required'=>'You must fill your blog name ',
            'name.min'=>'Your name must have at least 4 characters',
            'name.max'=>'Your name can not over 50 characters',
            'title.required'=>'You must fill the title of the blog',
            'title.min'=>'Your title must have at least 10 characters',
            'title.max'=>'Your title can not over 100 characters',
            'content.required'=>'You must fill the content of your blog',
            'content.min'=>'Your content must have at least 50 characters',
            'content.max'=>'Your content can not over 255 characters',
        ];
        return $message;
    }
}
