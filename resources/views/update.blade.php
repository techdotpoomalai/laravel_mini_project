<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h2>Edit User</h2>
    @if($user)
    <form action="{{ route('updatedata', $user->id) }}" method="POST">
        @csrf
        @method('PUT')  <!-- Laravel directive to simulate PUT method -->

        <label for="name">Full Name</label>
        <input type="text" name="name" value="{{ old('name', $user->name) }}" required/><br/>

        <label for="number">Contact Number</label>
        <input type="text" name="number" value="{{ old('number', $user->number) }}" required/><br/>

        <label for="email">Email</label>
        <input type="text" name="email" value="{{ old('email', $user->email) }}" required/><br/>

        <label for="password">Password</label>
        <input type="text" name="password" value="{{ old('password', $user->password) }}" required/><br/>

        <input type="submit" value="Update" />
    </form>
    @endif

    @if(session('error'))
        <div style="color: red;">
            <h2>{{ session('error') }}</h2>
        </div>
    @endif
</body>
</html>