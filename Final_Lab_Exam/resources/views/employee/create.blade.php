<!DOCTYPE html>
<html>
<head>
	<title>Create Product</title>
</head>
<body>
	<form method="post">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<fieldset>
			<legend>Create Product</legend>
		<table>
			<tr>
				<td>Product Name</td>
				<td><input type="text" name="productname" value="{{old('productname')}}"></td>
			</tr>
			<tr>
				<td>Quantity</td>
				<td><input type="text" name="quantity" value="{{old('quantity')}}"></td>
			</tr>
			<tr>
				<td>Price</td>
				<td><input type="text" name="price" value="{{old('price')}}"></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Submit">
					 
					<button>
						<a href="{{route('employee.home')}}">
							Back
						</a>
					</button>
					 
				</td>
			</tr>
		</table>
		</fieldset>
	</form>
	<div>
		@foreach($errors->all() as $err)
			{{$err}} <br>
		@endforeach
	</div>
</body>
</html>