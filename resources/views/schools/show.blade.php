<!DOCTYPE html>
<html>
<head>
	<title>{{$school->name}}</title>
</head>
<body>
	
	{{$school->name}}
	
	<button type="button" onclick="window.location='{{url("schools/edit/$school->id")}}'">Edit School</button>
<br/>

<ul>Students

	@foreach ($students as $student)
	
	<li>{{$student->first_name." ".$student->last_name}} </li>

	
	@endforeach
</ul>
</body>
</html>