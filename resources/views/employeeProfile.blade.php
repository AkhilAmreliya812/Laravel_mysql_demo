<div>
    
    @if(session()->has('empId'))
        <h1>Employee Profile</h1>
        <h3>Your employee id is {{ session()->get('empId') }}</h3>

        <a href="{{ route('employeeLogout') }}">Logout</a>
       
    @else
        <h1>User Profile</h1>

        <h3>You are not logged in.</h3>
 
        <a href="{{ route('employeeLogin') }}">Click here to Login</a>

    @endif
</div>
 