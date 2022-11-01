<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StorePostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3',
            'description' => 'required|min:10', 
            'user_id' =>'exists:posts',
        ];
    }

    public function messages()
{
    return [
           'title.required' => 'Required Title',
            'title.min' => 'Title must be > 3',
            'description.required'=>'Required Description',
            'description.min'=>'Description must be > 10',
    ];
}
}
