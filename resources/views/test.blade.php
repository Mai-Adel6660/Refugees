<!DOCTYPE html>
<html>
<head>
	<title>Admins</title>
	<style type="text/css">
		table,td,th{border: 1px solid; height: 40px}
		table{width: 400px}
		thead td{font-weight: bold; text-align: center}
	</style>
</head>
<body>

	<table>
		<thead>
			<tr>
				<td>ID</td>
				<td>Name</td>
				<td>Email</td>
			</tr>
		</thead>
		@foreach($test as $tests)
		<tr>
			<td> {{$tests->id}} </td>
			<td> {{$tests->name}} </td>
			<td> {{$tests->email}} </td> 
		</tr>
		
		@endforeach


	</table>

</body>
</html>