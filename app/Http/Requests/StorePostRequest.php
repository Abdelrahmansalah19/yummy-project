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
         'name'=>'required|string|min:3|max:20',
         'email'=>'required|email',
         'phone'=>"required|string",
         'date'=>'required|string|max:50',
         'time'=>'required|string|max:100',
         'people'=>'required|int',
         'message'=>'required|max:1000'


        ];
    }
}
