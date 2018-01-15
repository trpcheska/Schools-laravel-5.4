<!DOCTYPE html>
<html>
<head>
	<title>Create School</title>
</head>
<body>
<form method="POST" action="/Schools-laravel/public/schools/create">
	{{ csrf_field() }}


	<label for="name">Name:</label>
	<input type="text" name="name">

	<label for="address">Address:</label>
	<input type="text" name="address">

	<label for="maxStudents">Max. Number of students:</label>
	<input type="text" name="maxStudents">

	<label for="fee">Yearly fee:</label>
	<input type="text" name="fee">

	<button type="submit" name="submit">Submit</button>
</form>
</body>
</html>