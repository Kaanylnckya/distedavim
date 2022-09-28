<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    use HasFactory;

    protected $fillable = ['doctor_id', 'name', 'price'];

    public function doctors()
    {
        return $this->belongsTo(Doctor::class,'doctor_id');
    }
}
