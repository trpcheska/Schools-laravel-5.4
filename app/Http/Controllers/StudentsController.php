<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\School;

class StudentsController extends Controller
{
   public function index()
   {
   	$students = Student::get();

   	return view('students.index')->with('students', $students);
   }

   public function create()
   {
   	$schools = School::get();
   	return view('students.create')->with('schools', $schools);
   }

   public function save()
   {
	
   	$this->validate(request(), [

   		'first_name' => 'required',
   		'last_name' => 'required',
   		'birthdate' => 'date',
   		'picture' => 'image|max:1999',
   		'school_id' => 'required'

   	]);


   	$fileNameWithExt = request()->file('picture')->getClientOriginalName();

   	$fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
	
	   $extension = request()->file('picture')->getClientOriginalExtension();

	   $fileNameToStore = $fileName."_".time().".".$extension;

	   request()->file('picture')->storeAs('public/StudentPhotos', $fileNameToStore);

   	$student = new Student;

   	$student->first_name = request()->first_name;
   	$student->last_name = request()->last_name;
   	$student->picture = $fileNameToStore;
   	$student->school_id = request()->school_id;
   	$student->birthdate = request()->birthdate;


   	$student->save();
   	

	return redirect('/students');

   }

   public function show($id)
   {
      $student = Student::find($id);


      return view('students.show')->with('student', $student);
   }


   public function edit($id)
   {
      $schools = School::get();
      $student= Student::find($id);
      return view('students.edit')->with(['student' => $student, 'schools' => $schools]);
   }

   public function update($id)
   {
        $student= Student::find($id);



        if(request()->first_name !=null)
         $student->first_name = request()->first_name;

      else
         $student->first_name = $student->first_name;

      if(request()->last_name != null)
      $student->last_name = request()->last_name;

      else
      $student->last_name = $student->last_name;


      if(request()->school_id !=null)
      {
         $student->school_id = request()->school_id;
      }   

      else
         $student->school_id = $student->school_id;

      if(request()->birthdate !=null)
         $student->birthdate = request()->birthdate;

      else
         $student->birthdate = $student->birthdate;

      if(request()->picture != null)
      {
       $fileNameWithExt = request()->file('picture')->getClientOriginalName();

      $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
   
      $extension = request()->file('picture')->getClientOriginalExtension();

      $fileNameToStore = $fileName."_".time().".".$extension;

      request()->file('picture')->storeAs('public/StudentPhotos', $fileNameToStore);

      $student->picture = $fileNameToStore;
      }

      else

         $student->picture = $student->picture;

      $student->save();

      return redirect('/students');
}

}
