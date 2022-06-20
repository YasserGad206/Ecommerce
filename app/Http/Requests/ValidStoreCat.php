<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidStoreCat extends FormRequest
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
      'category'=>'min:1',
       'category.*.name'=>'required',
       'category.*.translation_lang'=>'required',
       'category.*.active'=>'required',
       

        ];
    }

    public function messages()
    {
        return [
            //
              'required' =>'هذا الحقل مطلوب ' , 
'category.min'=> 'يجب ادخال على اقل قائمة واحدة' 

        ];
    }
}
