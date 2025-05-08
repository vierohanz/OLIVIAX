<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Filament\Models\Contracts\FilamentUser;

class Users extends Authenticatable
{
    use Notifiable,
        HasFactory,
        HasApiTokens;
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [
        'name',
        'email',
        'username',
        'picture',
        'password',
        'role',
        'email_verified_at',
    ];
    public function canAccessPanel(\Filament\Panel $panel): bool
    {
        return in_array($this->role, [1, 2, 3]); // hanya role tertentu bisa akses
    }
}
