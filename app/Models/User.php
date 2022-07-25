<?php

namespace App\Models;

use App\Enum\GroupEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'group_id'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function isAdmin(): bool
    {
        return $this->group->name === GroupEnum::ADMIN->value;
    }

    public function isCMSUser(): bool
    {
        return $this->group->name === GroupEnum::CMS->value;
    }

    public function isAppUser(): bool
    {
        return $this->group->name === GroupEnum::USER->value;
    }
}
