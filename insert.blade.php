<!DOCTYPE html>
<html>
<head>
    <title>Student Records Form</title>
</head>
<body>
    <h1>Student Records Form</h1>
    <form method="POST" action="{{ route('store') }}">
        @csrf
        <label for="id">ID:</label>
        <input type="text" id="id" name="id" required><br>

        <label for="roll-number">Roll Number:</label>
        <input type="text" id="roll-number" name="roll-number" required><br>

        <label for="cgpa">CGPA:</label>
        <input type="text" id="cgpa" name="cgpa" required><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
