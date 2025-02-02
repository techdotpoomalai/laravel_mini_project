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
                <th>#</th>
                <th>User Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Password</th>
                <th>Created Time</th>
                <th>Updated Time</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->number }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>
                    <td>
                        <P><a href="{{ route('usereditpage',$user->id) }}" class="btn" id={{$user->id}}>Edit</a></P>
                        <form action="{{ route('deleteuser', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn" id="{{ $user->id }}">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        
    </table>
    @if(session('success'))
        <div style="color: green;">
            <h2>{{ session('success') }}</h2>
        </div>
    @endif
    @if(session('error'))
        <div style="color: red;">
            <h2>{{ session('error') }}</h2>
        </div>
    @endif
</body>
</html>