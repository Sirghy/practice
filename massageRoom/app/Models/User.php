<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Role;
use App\Enums\Role as RoleEnum;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'surname',
        'email',
        'password',
        'phone',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function roleEnum(): ?RoleEnum
    {
        return $this->role?->role;
    }
    public function isUser(): bool
    {
        return $this->roleEnum() === RoleEnum::USER;
    }
    public function isAdmin(): bool
    {
        return $this->roleEnum() === RoleEnum::ADMIN;
    }
    public function isModerator(): bool
    {
        return $this->roleEnum() === RoleEnum::MODERATOR;
    }
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }



}
