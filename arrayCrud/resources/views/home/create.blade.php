<!DOCTYPE html>
<html>
<head>
	<title>Create Student</title>
</head>
<body>
	<form method="post">
		<fieldset>
			<legend>Create</legend>
		<table>
			<tr>
				<td>ID</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>CGPA</td>
				<td><input type="text" name="cgpa"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>
					<a href="/home">
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