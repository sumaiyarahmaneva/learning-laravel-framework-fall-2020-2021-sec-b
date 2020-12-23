<!DOCTYPE html>
<html>
<head>
	<title>Delete Product</title>
</head>
<body>
	<a href="{{route('employee.productlist')}}">Back</a> |
	<a href="/logout">logout</a>
	<br>
	<br>
	<form method="post">
		<table border="1">
			<tr>
				<td>Product Name</td>
				<td>{{$productname}}</td>
			</tr>
			<tr>
				<td>Quantity</td>
				<td>{{$quantity}}</td>
			</tr>
			<tr>
				<td>Price</td>
				<td>{{$price}}</td>
			</tr>
			<tr>
				<td colspan="2">
					<h1>Are you sure you want to delete this product?</h1><br>
					<input type="submit" name="submit" value="Yes">
					<button>
						<a href="{{route('employee.productlist')}}">No</a>
					</button>
					<input type="hidden" name="_token" value="{{csrf_token()}}">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>