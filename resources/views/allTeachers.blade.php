<div>
    <h1>Teachers List</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Subject</th>
            <th>Email</th>
        </thead>
        <tbody>
           @if(isset($data) && count($data) > 0)
               @foreach($data as $teacher)
                   <tr>
                       <td>{{ $teacher->id }}</td>
                       <td>{{ $teacher->name }}</td>
                       <td>{{ $teacher->subject }}</td>
                       <td>{{ $teacher->email }}</td>
                   </tr>
               @endforeach
           @else
               <tr>
                   <td colspan="4">No data found</td>
               </tr>
           @endif
        </tbody>
    </table>
</div>
