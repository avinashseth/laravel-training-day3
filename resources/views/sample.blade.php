<table>
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Manage</td>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{ route('get-update-user', [ 'user_id' => $user->id ] ) }}">Update</a> / 
                <a href="{{ route('get-delete-user', [ 'user_id' => $user->id ] ) }}">Delete</a> /
                <a href="{{ route('get-user-details', [ 'user_id' => $user->id ] ) }}">View</a>
            </td>
        </tr>
    @endforeach
</table>
<p>{{ $users->links() }}</a>
<a href="{{ route('get-new-user') }}">Create new record</a>
