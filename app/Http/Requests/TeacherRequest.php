<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherRequest extends FormRequest
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
        'name_ar'                       =>'required',
         'name_en'                      =>'required',
         'University_ar'                =>'required',
         'University_en'                =>'required',
         'qualification_ar'             => 'required',
         'qualification_en'             => 'required',
         'Customization_ar'            =>'required',
         'Customization_en'            =>'required',
         'GraduationYear'              =>'date',
         'Gender'                      =>'required',
         'photo'                      =>'required|image'
        ];
    }
}
