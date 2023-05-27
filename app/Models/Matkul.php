<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    use HasFactory;

    public function semester() {
        return $this->belongsTo(Semester::class);
    }

    public function materi() {
        return $this->hasMany(Materi::class);
    }
}
