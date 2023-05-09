<!DOCTYPE html>
<html>

<head>
	<title>Student Records</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}

		th,
		td {
			text-align: left;
			padding: 8px;
			border: 1px solid black;
		}

		th {
			background-color: #ddd;
			font-weight: bold;
		}

		button {
			background-color: #4CAF50;
			color: white;
			padding: 8px 16px;
			border: none;
			cursor: pointer;
		}
	</style>
</head>

<body>
	<h1>Student Records</h1>

	<form method="POST" action="{{ route('delete') }}">
		@csrf
		<input type="text" name="rollNumber" placeholder="Enter roll number to delete" id="search-input"><br>
		<button style="color:red" type="submit">Delete</button>
	</form>

	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Roll Number</th>
				<th>CGPA</th>

			</tr>
		</thead>
		<tbody>
			@foreach($students as $student)
			<tr>
				<td>{{ $student->id }}</td>
				<td>{{ $student->rollNumber }}</td>
				<td>{{ $student->cgpa }}</td>
			</tr>
			@endforeach
		</tbody>

	</table>
	<a href="{{ route('create') }}">Insert New Record</a>
</body>

</html>
