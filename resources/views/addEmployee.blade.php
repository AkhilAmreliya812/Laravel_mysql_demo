<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Employee</title>
</head>
<body>
    <h1>Add Employee</h1>

    <p><b>{{ session()->get('message') }}</b></p>

    <form action="{{ route('addEmployee.post') }}" method="POSt">
        @csrf
        <input type="text" name="name" id="name" placeholder="Employee name">
        <br><br>

        <input type="text" name="empid" id="empid" placeholder="Enter employee id">
        <br><br>

        <input type="password" name="password" id="password" placeholder="Enter password">
        <br><br>

        <button type="submit">Add Employee</button>
    </form>
</body>
</html>