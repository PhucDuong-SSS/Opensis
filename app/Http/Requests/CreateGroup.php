<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateGroup extends FormRequest
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
            'member' => 'required|lt:200|gt:0',
        ];
    }
    function messages()
    {
        return [
            'name.required' => 'Trường này không được để trống',
            'member.required' => 'Trường này không được để trống',
            'member.lt' => 'Sĩ số không cao quá 200 học sinh',
            'member.gt' => 'Sĩ số không thấp hơn 0 học sinh',
        ];
    }
}
