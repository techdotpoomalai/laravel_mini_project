<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h2>Sign In</h2>
    <form action="{{ route('signindata') }}" method="POST">
        @csrf
        <label for="username">Username</label>
        <input type="text" name="username"/><br/>
        <label for="password">Password</label>
        <input type="password" name="password"/><br/>
        <input type="submit" value="Submit" />
    </form>
    @if(session('error'))
        <div style="color: red;">
            <h2>{{ session('error') }}</h2>
        </div>
    @endif
</body>
</html>