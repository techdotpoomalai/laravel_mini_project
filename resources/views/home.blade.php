<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h2>Welcome to the home page</h2>
    <p>you can singn in and sing up</p>
    <a href="{{ route('signuppage') }}" class="btn">Sign Up</a>
    <a href="{{ route('signinpage') }}" class="btn">Sign In</a>
</body>

</html>