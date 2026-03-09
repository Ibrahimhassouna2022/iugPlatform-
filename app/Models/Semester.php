<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    protected $fillable = [
        'year'
    ];
    
     public function year(){
     return $this->belongsTo(Year::class);
    }

      public function courses(){
     return $this->hasMany(Course::class);
    }

    
}
