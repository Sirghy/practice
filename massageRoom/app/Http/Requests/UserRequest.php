<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;
use App\Enums\Role;
use App\Models\Role as RoleModel;
use App\Models\User;

class UserRequest extends FormRequest
{     /**
      * Determine if the user is authorized to make this request.
      */
    public function authorize(): bool
    {
        //return Auth::check();
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */

    public function messages(): array
    {
        return [
            'email.unique' => 'This email is already registered.',
            'phone.unique' => 'This phone number is already registered.',
        ];
    }
    public function mapped(): array
    {
        return [
        'name'     => $this->input('name'),
        'surname'  => $this->input('surname'),
        'email'    => $this->input('email'),
        'phone'    => $this->input('phone'),
        'password' => $this->input('password'),
        'role_id' => $this->input('role_id')
        //'role_id'  => $this->resolveRoleId(),
     ];
    }
    private function resolveRoleId(): int
    {
        $roleName = $this->input('role', ROLE::USER->value);

        $user = Auth::user();

        $currentUserRole = $user?->role?->role ?? Role::USER->value;

        if (!in_array($currentUserRole, [Role::ADMIN->value, Role::MODERATOR->value])) {
            $roleName = Role::USER->value;
        }
        return RoleModel::where('role', $roleName)->value('id') ?? 1;
    }
    //---------------Пока заккоментил,го позже надо убрать----------------
    //  protected function prepareForValidation()
    //  {

    //      $roleName = $this->input('role',Role::USER->value);// default user
    //      $currentUserRole = auth()->user()?->role?->role ?? Role::USER->value;

    //      if (!in_array($currentUserRole, [Role::ADMIN->value, Role::MODERATOR->value])) {
    //      $roleName = Role::USER->value; // обычный юзер не может назначить роль
    //  }
    //      // Конвертируем role name в role_id
    //      $roleId = RoleModel::where('role', $roleName)->value('id') ?? 1;
    //      return parent::prepareForValidation();
    //      $this->merge([
    //      'role_id' => $roleId,
    //  ]);
    //      return parent::prepareForValidation();
    // }
}
