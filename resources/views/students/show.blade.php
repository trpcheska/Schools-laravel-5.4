<!DOCTYPE html>
<html>
<head>
	<title>Student Details</title>
</head>
<body>
{{ $student->first_name." ".$student->last_name }}

<img src="/Schools-laravel/storage/app/public/StudentPhotos/{{$student->picture}}" alt="{{$student->first_name." ".$student->last_name}}">


<button type="button" onclick="window.location='{{url("/students/edit/$student->id")}}'">Edit student</button>
{{$student->picture}}
</body>
</html>