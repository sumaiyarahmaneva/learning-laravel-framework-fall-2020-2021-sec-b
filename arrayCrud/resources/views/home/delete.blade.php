<!DOCTYPE html>
<html>
<head>
	<title>Delete Student</title>
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
		<tr>
			<td colspan='3'>Are you sure?</td>
		</tr>
		<tr>
			<td colspan='3'>
				<form method='post'>
					<a href="/stdlist">
						<button type="button">
							Back
						</button>
					</a>
					<input type="submit" name="submit" value="Confirm">
				</form>
			</td>
		</tr>
	</table>
</body>
</html>