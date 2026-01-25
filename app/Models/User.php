<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'team_name',
        'team_leader',
        'team_member_1',
        'team_member_2',
        'team_member_3',
        'contact_number',
        'email',
        'password',
        'university',
        'competition_id',
        'link_drive_payment',
        'payment_status', //
        'role',           // 
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }

    public function submission()
    {
        return $this->hasOne(Submission::class);
    }

    public function selection()
    {
        return $this->hasOne(Selection::class);
    }

    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }
}
