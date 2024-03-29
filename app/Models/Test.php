<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $fillable = ['test', 'patient_id', 'observations', 'diagnostic', 'result'];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
