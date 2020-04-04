<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course_by_semester extends Model
{
    public function courses()
    {
        return $this->belongsTo(course::class);
    }
}
