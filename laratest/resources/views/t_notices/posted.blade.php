<!DOCTYPE html>
<html>
<head>
	<title>POSTED NOTICES</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/table.css')}}">
</head>
<body>

	<fieldset>
	<legend><h1>POSTED NOTICES</h1></legend>

	<table border="1">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>notice</th>
			<th>date</th>
			<th>operation</th>
		</tr>

	@for($i=0; $i != count($users); $i++)
		<tr>
			<td>{{$users[$i]->id}}</td>
			<td>{{$users[$i]->name}}</td>
			<td>{{$users[$i]->notice}}</td>
			<td>{{$users[$i]->date}}</td>
		
			<td>
				<a href="{{route('home.ndelete', [$users[$i]->id])}}">Delete</a>
			</td>
		</tr>
	@endfor
	</table>
	<br/>
	<a href="{{route('home.postnotices')}}">Back</a> 
<a href="{{route('home.index')}}">Go To Home Page</a>
</fieldset>
</body>
</html>