<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   protected $fillable = ['first_name', 'last_name', 'school_id', 'picture', 'birthdate'];

   public function school()
   {
   	return $this->belongsTo(School::class);
   }
}
