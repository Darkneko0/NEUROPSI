<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_patient',
        'app_patient',
        'apm_patient',
        'birth',
        'gender',
        'email',
        'phone'
    ];

    public function therapistPatients()
    {
        return $this->hasMany(TherapistPatients::class);
    }

}
