<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="{{ route('auth@login') }}" method="post">
        @csrf
        <input type="email" name="email" id="">
        <input type="text" name="password" id="">
        <input type="submit" value="Login">
        <div>
            <a href="{{ route('page@sendOtpPage') }}">Register Now</a>
        </div>
    </form>
</body>
</html>
