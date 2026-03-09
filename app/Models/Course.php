<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
  protected $fillable = [
    'year'
  ];

  public function semester()
  {
    return $this->belongsTo(Semester::class);
  }

  public function departments()
  {
    return $this->belongsToMany(Department::class, 'department_courses');
  }
}
