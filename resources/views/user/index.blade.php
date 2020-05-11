<table>
    @foreach($activedUsers as $activedUser)
        <tr>
            <td>{{ $activedUser->id }}</td>
            <td>{{ $activedUser->name }}</td>
            <td>{{ $activedUser->email }}</td>
        </tr>
    @endforeach
</table>
