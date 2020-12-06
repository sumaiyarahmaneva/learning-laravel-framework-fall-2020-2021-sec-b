<!DOCTYPE html>
<html>
<head>
	<title>Student Details</title>
</head>
<body>
	<a href="/stdlist">Back</a> |
	<a href="/logout">logout</a>
	<br>

	<table border="1">
		<tr>
			<td>Id</td>
			<td>{{$students[0]['id']}}</td>
		</tr>
		<tr>
			<td>Name</td>
			<td>{{$students[0]['name']}}</td>
		</tr>
		<tr>
			<td>CGPS</td>
			<td>{{$students[0]['cgpa']}}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>{{$students[0]['email']}}</td>
		</tr>
	</table>
</body>
</html>