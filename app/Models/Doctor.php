<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'department'];


    public function treatments()
    {
        return $this->hasMany(Treatment::class, 'doctor_id');
    }
}
