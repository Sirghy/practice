<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Enums\Role as RoleEnum;

class Role extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = ['role'];

    protected $casts = [
        'role' => RoleEnum::class
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
