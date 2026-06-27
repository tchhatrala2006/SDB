<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up | Digital Notice Board</title>
    <link rel="stylesheet" href="{{asset('css/asingup.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>

<h2>Admin Registration</h2>

@if(session('success'))
    <p style="color:green;">{{ session('success') }}</p>
@endif

<form method="POST" action="/ad">
    @csrf

    Name:
    <input type="text" name="name" value="{{ old('name') }}">
    <span>@error('name') {{ $message }} @enderror</span>
    <br><br>

    Email:
    <input type="email" name="email" value="{{ old('email') }}">
    <span>@error('email') {{ $message }} @enderror</span>
    <br><br>

    Password:
    <input type="password" name="password">
    <span>@error('password') {{ $message }} @enderror</span>
    <br><br>

    Confirm Password:
    <input type="password" name="password2">
    <span>@error('password2') {{ $message }} @enderror</span>
    <br><br>

    <button type="submit">Register</button>

</form>

</body>
</html>
