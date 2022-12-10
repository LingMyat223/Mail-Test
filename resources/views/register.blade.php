<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
</head>
<body>
    <form action="{{ route('auth@register') }}" method="post">
        @csrf
        <div>
            email
            <input type="email" name="email" value="{{ $data->email }}" id="" readonly>
        </div>
        <div>
            password
            <input type="text" name="password" id="">
        </div>
        <div>
            confirm_password
            <input type="text" name="confirm_password" id="">
        </div>
        <input type="submit" value="register">
    </form>
</body>
</html>
