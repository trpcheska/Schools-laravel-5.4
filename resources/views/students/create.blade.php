<!DOCTYPE html>
<html>
<head>
	<title>Create new student</title>
</head>
<body>

</br>
<form method="POST" action="/Schools-laravel/public/students/create"  enctype="multipart/form-data">
	{{ csrf_field() }}
	<label for="first_name">First name: </label>
	<input type="text" name="first_name">
	</br>
	<label for="last_name">Last name: </label>
	<input type="text" name="last_name">
	</br>
	<label for="school_id">School: </label>
	<select name="school_id">
	@foreach($schools as $school)
	<option name="school_id" value="{{$school->id}}">{{$school->name}}</option>

	@endforeach
	</select>
	<br>
	<label for="birthdate">Birthdate: </label>
	<input type="date" name="birthdate">

	</br>
	<label for="picture">Picture: </label>
	<input type="file" name="picture" id='picture'>

	<br>

	<button type="submit" name="submit">Submit</button>

</form>
</body>
</html>