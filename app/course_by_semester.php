<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course_by_semester extends Model
{
    protected $fillable = ['course_id', 'location', 'number_of_students', 'teacher', 'semester', 'year'];
    public function courses()
    {
        return $this->belongsTo(course::class);
    }
}
