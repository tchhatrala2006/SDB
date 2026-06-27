<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Forgot Password | Digital Notice Board</title>
     <link rel="stylesheet" href="{{ asset('css/forgot.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>

<div class="forgot-page">
    <div class="forgot-box">
        <h2>Admin Forgot Password?</h2>
        <p>Enter your registered email to reset your password</p>

        <form action="/afrg" method="post">
            @csrf
            <div class="input-group">
                <input type="email"   name="email">
                <label>Email Address</label>
            </div>

            <button type="submit">Send Reset Link</button>
        </form>

        <div class="back-link">
            Remember your password? <a href="{{url('admin')}}">Admin</a>
        </div>

        <div class="footer-text">
            © 2026 Digital Notice Board System
        </div>
    </div>
</div>

</body>
</html>
