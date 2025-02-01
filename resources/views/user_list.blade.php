<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User list</title>
</head>
<body>
<a href="{{ route('homepage') }}" class="btn">Logout</a>
    <table>
        <thead>
            <tr>
                <th>User Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Password</th>
                <th>Login Time</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->number }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password }}</td>
                    <td>{{ $user->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
        
    </table>
</body>
</html>