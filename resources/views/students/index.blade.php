
<!DOCTYPE html>
<html>
<head>
	<title>Students</title>
</head>
<body>
	<ul>
@foreach ($students as $student)
<li>
	{{$student->first_name. " ". $student->last_name}}
</li>
<button type="button" onclick="window.location='{{ url("/student/$student->id") }}'"> details..</button>
@endforeach

</ul>
<button type="button" onclick="window.location='{{ url("/students/create") }}'">Add new student</button>
</body>
</html>