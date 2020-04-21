<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public static function insertData($data, $data2)
    {

        $value = DB::table('course_by_semesters')->where('course_id', $data['course_id'])->get();
        $value2 = DB::table('courses')->where('course_id', $data['course_id'])->get();
        if ($value->count() == 0) {
            DB::statement('ALTER TABLE course_by_semesters AUTO_INCREMENT=1;');
            DB::table('course_by_semesters')->insert($data);
        }
        if ($value2->count() == 0) {
            DB::table('courses')->insert($data2);
        }
    }
}
