<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" action="/Schools-laravel/public/students/edit/{{$student->id}}"  enctype="multipart/form-data">
	{{ csrf_field() }}
	<label for="first_name">First Name:</label>
	<input type="text" name="first_name" placeholder="{{$student->first_name}}">


	<label for="last_name">Last Name:</label>
	<input type="text" name="last_name" placeholder="{{$student->last_name}}">


	<label for="birthdate">Birthdate:</label>
	<input type="date" name="birthdate">
	<label for="school_id">School:</label>
	<select name="school_id">
	@foreach($schools as $school)
	<option name="school_id" value="{{$school->id}}">{{$school->name}}</option>

	@endforeach
	</select>

	<label for="picture">Picture:</label>
	<input type="file" name="picture">


	<button type="submit" name="submit">Submit</button>
	</form>
</body>
</html>