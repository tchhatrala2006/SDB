<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin | Digital Notice Board</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>

<div class="login-page">

    <div class="login-box">
      <h2>Admin Login</h2>
        <p>Enter your credentials to access the dashboard</p>	
        <form action="/a" method="post">
    @csrf

    {{-- Error Message --}}
    @if(session('fail'))
        <p style="color:red; text-align:center;">
            {{ session('fail') }}
        </p>
    @endif

    <div class="input-group">
        <input type="email" required name="em" value="{{ old('em') }}">
        <label>Email Address</label>
    </div>
    
    <div class="input-group">
        <input type="password" required name="pd">
        <label>Password</label>
    </div>
    
    <div class="options">
        <label><input type="checkbox"> Remember Me</label>
        <a href="{{ url('adminForget') }}">Forgot Password?</a>
        <a href="{{asset('adminsing')}}">Admin Register?</a>
    </div>
    
    
    <button type="submit" id="home">Login</button>

</form>


        <div class="footer-text">
            © 2026 Digital Notice Board System
        </div>
    </div>

</div>

</body>
</html>
