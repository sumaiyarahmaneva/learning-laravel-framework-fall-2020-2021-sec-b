<!DOCTYPE html>
<html>
<head>
	<title>Product Details</title>
</head>
<body>
	<a href="{{route('employee.productlist')}}">Back</a> |
	<a href="/logout">logout</a>
	<br>
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
	</table>
</body>
</html>