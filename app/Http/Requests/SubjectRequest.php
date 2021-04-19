<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubjectRequest extends FormRequest
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
            'name' => 'required',
            'period' => 'required|integer',
            'coefficient'=> 'required|integer'
        ];
    }
    public function messages()
    {
        return [
          'name.required'             =>'Bạn phải điền tên môn học',
            'period.required'         =>'Bạn phải điền só tiết học',
            'period.integer'          =>'Số tiết học là số nguyên',
            'coefficient.required'    =>'Bạn phải điền hệ số ',
            'coefficient.integer'     =>'Hệ số là số nguyên',
        ];

    }
}
