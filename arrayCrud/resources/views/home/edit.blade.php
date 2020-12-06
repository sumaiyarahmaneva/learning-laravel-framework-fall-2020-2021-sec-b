<!DOCTYPE html>
<html>
<head>
	<title>Edit Student</title>
</head>
<body>
	<form method="post">
		<fieldset>
			<legend>Edit</legend>
		<table>
			<tr>
				<td>ID</td>
				<td><input type="text" name="id" value="{{$students[0]['id']}}"></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="{{$students[0]['name']}}"></td>
			</tr>
			<tr>
				<td>CGPA</td>
				<td><input type="text" name="cgpa" value="{{$students[0]['cgpa']}}"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="{{$students[0]['email']}}"></td>
			</tr>
			<tr>
				<td>
					<a href="/stdlist">
						<button type="button">
							Back
						</button>
					</a>
				</td>
				<td><input type="submit" name="submit" value="Submit"></td>

			</tr>
		</table>
		</fieldset>
	</form>
</body>
</html>