<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;
use App\Student;

class SchoolsController extends Controller
{
    public function index()
    {
    	$schools = School::get();

    	//var_dump($schools);
    	return view('schools.index')->with('schools', $schools);
    }


    public function create()
    {
    	return view('schools.create');
    }
   public function save()
   {
   		$this->validate(request(), [

   			'name' => 'required',
   			'address' => 'required',
   			'maxStudents' => 'required',
   			'fee' => 'required'


   		]);


   		$school = new School;

   		$school->name = request()->name;
   		$school->address = request()->address;
   		$school->maxStudents = request()->maxStudents;
   		$school->fee = request()->fee;

   		$school->save();


   		return redirect('/schools');
   }

   public function show($id)
   {
   	$school = School::find($id);

   	$students = Student::where('school_id', $id)->get();


   	//dd($students);
   	return view('schools.show')->with(['school'=>$school, 'students'=>$students]);
   }


   public function edit($id)
   {
   		$school = School::find($id);

   		return view('schools.edit')->with('school', $school);
   }

   public function update($id)
   {

   	$school = School::find($id);
   //	dd(request()->address);
   	if((request()->name)!=null){
   	$school->name = request()->name;
   	}
   else{
   	$school->name = $school->name; }
   if((request()->address)!=null){
   	$school->address = request()->address;}
   else{
   	$school->address = $school->address;}

   if ((request()->maxStudents)!=null){
   	$school->maxStudents = request()->maxStudents;}
   else{
   	$school->maxStudents = $school->maxStudents;}
   if ((request()->fee)!=null){
   	$school->fee = request()->fee;}
   else{
   	$school->fee =$school->fee;}


   	$school->save();


   	return redirect('/schools');
   }
}
