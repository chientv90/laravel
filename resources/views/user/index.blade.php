@extends('layouts.app')

<table>
    @foreach($activedUsers as $activedUser)
        <tr>
            <td>{{ $activedUser->id }}</td>
            <td>{{ $activedUser->name }}</td>
            <td>{{ $activedUser->email }}</td>
            <td>{{ $activedUser->emailVerifiedAt }}</td>
            <td>{{ $activedUser->email_verified_at }}</td>
{{--            <td>{{ $activedUser->password }}</td>--}}
            <td>{{ $activedUser->rememberToken }}</td>
            <td>{{ $activedUser->createdAt }}</td>
            <td>{{ $activedUser->updatedAt }}</td>
        </tr>
    @endforeach
</table>
