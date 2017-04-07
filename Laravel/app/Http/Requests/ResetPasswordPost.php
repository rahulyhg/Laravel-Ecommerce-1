<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use App\User;

class ResetPasswordPost extends FormRequest
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
            'email' => 'required',
            'password' => 'required|confirmed',
        ];
    }
    /**
     * Configure the validator instance.
     *
     * @param  \Illuminate\Validation\Validator  $validator
     * @return void
     */
    public function withValidator($validator)
    {
        $email = $this->input('email');
        $password = $this->input('password');
        $user = User::where('email', $email)->first();
        $result = Hash::check($password, $user->password);
        $validator->after(function ($validator) use ($result) {
            if($result) {
                $validator->errors()->add('password', 'New password must not be the same as old password');
            }
        });
    }
}
