<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Login</title>
</head>
<body>
    <h1>Employee Login</h1>

    <form action="{{route('employeeLogin.post')}}" method="POST">
        @csrf
       
        <input type="text" id="empId" name="empId" placeholder="Enter employee id">
        <br><br>
    
        <input type="password" id="password" name="password" placeholder="Enter password">
        <br><br>

        <button type="submit">Login</button>
    </form>

</body>
</html>
