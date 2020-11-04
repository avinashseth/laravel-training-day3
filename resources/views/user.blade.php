<table>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Password</td>
    </tr>
    <tr>
        <td>{{ $userDetails[0]->id }}</td>
        <td>{{ $userDetails[0]->name }}</td>
        <td>{{ $userDetails[0]->email }}</td>
        <td>{{ $userDetails[0]->password }}</td>
    </tr>
</table>
<a href="{{ route('get-homepage') }}">Go Back</a>