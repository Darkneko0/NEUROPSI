<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TherapistPatients extends Model
{
    use HasFactory;

    protected $fillable = [
        'reason_for_consultation',
        'date_consultation',
        'patient_id',
        'user_id'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function patients()
    {
        return $this->belongsTo(Patients::class);
    }

    public function therapistTests()
    {
        return $this->hasMany(TherapistTests::class);
    }    
    
}
