
<!DOCTYPE html>
<html>
<head>
	<title>Schools</title>
</head>
<body>
	<ul>
@foreach ($schools as $school)
<li>
	{{$school->name}}
</li>
<button type="button" onclick="window.location='{{url("/schools/show/$school->id")}}'"> details..</button>
@endforeach

</ul>
</body>
</html>