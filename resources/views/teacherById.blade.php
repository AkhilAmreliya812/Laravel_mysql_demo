<div>
    <h1>Get Teacher By Id</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Subject</th>
            <th>Email</th>
        </thead>
        <tbody>
           @if(!is_null($data))
               <tr>
                   <td>{{ $data->id }}</td>
                   <td>{{ $data->name }}</td>
                   <td>{{ $data->subject }}</td>
                   <td>{{ $data->email }}</td>
               </tr>
           @else
               <tr>
                    <td colspan="4">No data found</td>
               </tr>
           @endif
        </tbody>
    </table>
</div>
