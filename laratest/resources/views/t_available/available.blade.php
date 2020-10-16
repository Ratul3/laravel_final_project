<!DOCTYPE html>
<html>
<head>
	<title>AVAILABLE TUITION</title>
		<link rel="stylesheet" type="text/css" href="{{asset('css/table.css')}}">

</head>
<body>
		<form>
			<fieldset>
				<legend><h1>AVAILABLE TUITION</h1></legend>
			<table>
			<tr>
			<th>id</th>
			<th>area</th>
			<th>class</th>
			<th>subject</th>
			<th>tuition_provider</th>
			</tr>
	@for($i=0; $i !=count($userList->results); $i++)		

		<tr>
		    <td>{{ $userList->results[$i]->id }}</td>
			<td>{{ $userList->results[$i]->area }}</td>
			<td>{{ $userList->results[$i]->class }}</td>
			<td>{{ $userList->results[$i]->subject }}</td>
			<td>{{ $userList->results[$i]->tuition_provider }}</td>
		</tr>
	
	@endfor		
	</table>	<br/>			
		<a href="{{route('home.index')}}">Back</a>		
			</fieldset>
			
		</form>
</body>
</html>
