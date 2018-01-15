<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" action="/Schools-laravel/public/schools/edit/{{$school->id}}">
	
	{{csrf_field()}}

	<label for="name">Name:</label>
	<input type="text" name="name" placeholder="{{$school->name}}">

	<label for="address">Address:</label>
	<input type="text" name="address" placeholder="{{$school->address}}">
	<label for="maxStudents">Max. Students:</label>
	<input type="text" name="maxStudents" placeholder="{{$school->maxStudents}}">
	<label for="fee">Fee:</label>
	<input type="text" name="fee" placeholder="{{$school->fee}}">


	<button type="submit" name="submit">Submit</button>

</form>
</body>
</html>