<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Code Verify</title>
</head>
<body>
    <form action="{{ route('otp@verify') }}" method="post">
        @csrf
        <input type="hidden" name="email" value="{{ request('email') }}">
        <input type="number" placeholder="Enter your verification code" name="code">
        @if (session('error'))
            <span class="text-danger">{{ session('error') }}</span>
        @endif
        <input type="submit" value="verify">
    </form>
</body>
</html>
