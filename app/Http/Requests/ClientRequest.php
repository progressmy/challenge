<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->path() =='/'){
            return true;
        }else{
            return false;
        }
    }
        

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
    'family-name' => 'required',
    'given-name' => 'required',
    'gender' => 'required',
    'email' => 'email',
    'postcode' => 'required',
    'address' => 'required',
    'building_name' => 'nullable',
    'textarea' => 'required',
];

}
    public function messages()
    {
        return [
            'family-name.required' => '苗字を入力してください',
            'given-name.required' => '名前を入力してください',
            'gender.required' => '性別を選択してください',
            'email.email' => 'メールアドレスの形式で入力してください',
            'postcode.numeric' => '郵便番号は半角で入力してください',
            'address.required' => '住所を入力してください',
            'building_name.required' => '建物名を入力してください',
            'textarea.required' => 'ご意見を入力してください', 
        ];
    }
}