<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
           'name'=> requierd,
           'password' =>requierd,
        ];

    }

    public function massages()
    {
        return [
        'name.requierd'=>'Vui long nhâp tên tài khoản',
        'password.requierd'=>'Vui lòng nhập mật khẩu',
        ]
    }
}
