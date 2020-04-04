<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $fillable = ['course_id', 'course_title'];
    public function course_by_semesters()
    {
        return $this->hasMany(course::class);
    }
}
