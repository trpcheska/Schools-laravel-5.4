<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = ['name', 'maxStudents', 'fee', 'address'];

    public function students()
    {
    	return $this->hasMany(Student::class);
    }
}
