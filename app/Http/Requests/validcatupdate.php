<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validcatupdate extends FormRequest
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
            //
    
            'photo'=>'required|mimes:jpg,jpeg,ping',
                'translation_lang'=>'required',
                     'name'=>'required',
      

        ];
    }

    public function messages()
    {
        return [
            //
              'required' =>'هذا الحقل مطلوب ' , 
             

        ];
    }
}
