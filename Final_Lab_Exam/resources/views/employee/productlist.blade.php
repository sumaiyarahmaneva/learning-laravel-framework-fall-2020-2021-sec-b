<!DOCTYPE html>
<html>
<head>
	<title>Product List</title>
</head>
<body>
	<a href="{{route('employee.home')}}">Back</a> |
	<a href="/logout">logout</a>
	<br>

	<table border="1">
		<tr>
			<td>Id</td>
			<td>Product Name</td>
			<td>Quantity</td>
			<td>Price</td>
			<td>Action</td>
		</tr>

		@for($i=0; $i < count($product); $i++)
			<tr>
				<td>{{$product[$i]['id']}}</td>
				<td>{{$product[$i]['productname']}}</td>
				<td>{{$product[$i]['quantity']}}</td>
				<td>{{$product[$i]['price']}}</td>
				<td>
					<a href="{{route('employee.editproduct', $product[$i]['id'])}}">Edit </a> |
					<a href="{{route('employee.productdetails', $product[$i]['id'])}}">Details </a> |
					<a href="{{route('employee.deleteproduct', $product[$i]['id'])}}">Delete </a> 
				</td>
			</tr>
		@endfor

	</table>
</body>
</html>