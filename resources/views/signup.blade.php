<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h2>Sign Up</h2>
    <form action="{{ route('signupdata') }}" method="POST">
        @csrf
        <label for="name">Full Name</label>
        <input type="text" name="name"/><br/>
        <label for="number">Contact Number</label>
        <input type="text" name="number"/><br/>
        <label for="email">Email</label>
        <input type="text" name="email"/><br/>
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