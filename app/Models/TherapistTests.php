<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TherapistTests extends Model
{
    use HasFactory;

    protected $fillable = [
        'therapist_id',
        'test_id'
    ];

    public function tests()
    {
        return $this->belongsTo(Tests::class);
    }

    public function therapistPatients()
    {
        return $this->belongsTo(TherapistPatients::class);
    }

    
}
