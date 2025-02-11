<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContentRequest extends FormRequest
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
            'title' => 'required',
            'userId' => 'required',
            'tags' => 'required',
            'avatar' => 'image|file|max:1024',
            'description' => 'required',
            'video' => 'required',
            'voice' => 'required',
            'slug' => 'required',
            'link' => 'required'
        ];
    }
}
