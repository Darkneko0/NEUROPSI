<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name_therapist',
        'app_therapist',
        'apm_therapist',
        'specialty',
        'user_name',
        'phone',
        'password',
        'professional_license'
    ];

    public function roleTherapists()
    {
        return $this->hasMany(RoleTherapists::class);
    }

    public function therapistPatients()
    {
        return $this->hasMany(TherapistPatients::class);
    }
}
