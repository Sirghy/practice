<?php

namespace App\Http\Requests;

class StoreUserRequest extends UserRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
         'name' => 'required|string|max:255',
         'surname' => 'required|string|max:255',
         'email' => 'required|email|unique:users,email',
         'password' => 'required|string|min:5|confirmed', // если есть подтверждение
         'phone' => 'nullable|string|max:20|unique:users,phone',
         'role_id' => 'required|integer|exists:roles,id'
         //'role' => 'nullable|string|in:' . implode(',', array_column(Role::cases(), 'value'))
        ];
    }

    public function messages(): array
    {
        return [
            'email.unique' => 'This email is already registered.',
            'phone.unique' => 'This phone number is already registered.',
        ];
    }
}
