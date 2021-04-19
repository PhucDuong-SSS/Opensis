<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateGrade extends FormRequest
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
            'name' => 'required|lt:13|gt:0',
        ];
    }
    function messages()
    {
        return [
            'name.required' => 'Trường này không được để trống',
            'name.lt' => 'khối lớp không cao quá lớp 12',
            'name.gt' => 'khối lớp không thấp quá lớp 1',
        ];
    }
}
