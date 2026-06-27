<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | Digital Notice Board</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>

<div class="login-page">

    <div class="login-box">
        <h2>Login to Digital Notice Board</h2>
        <p>User Login to Digital Notice Board</p>
        @if(session('fail'))
    <div style="color:red; text-align:center;">
        {{ session('fail') }}
    </div>
@endif

        <form action="{{route('login.check')}}" method="POST">

            @csrf
            <div class="input-group">
                <input type="text" required name="en">
                <label>Enrollement Number</label>
            </div>

            <div class="input-group">
                <input type="password" required name="pd">
                <label>Password</label>
            </div>

            <!-- <div class="options">
                <label><input type="checkbox"> Remember Me</label>
                <a href="{{url ('forgot')}}">Forgot Password?</a>
            </div> -->
               <div class="options">
                <label><input type="checkbox"> Remember Me</label>
                <a href="{{URL::to('singup')}}">User Register?</a>
            </div>

            <button type="submit"><a href="" id="home">Login</a></button>

            <!-- <div class="role">
                <span>Login as:</span>
                <select>
                    <option>Student</option>
                    <option>Admin</option>
                </select>
            </div> -->
        </form>

        <div class="footer-text">
            © 2026 Digital Notice Board System
        </div>
    </div>

</div>

</body>
</html>
