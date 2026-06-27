    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Sign Up | Digital Notice Board</title>
        <link rel="stylesheet" href="{{asset('css/singup.css')}}">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>

    <div class="signup-page">

        <div class="signup-box">
            <h2>Create Account</h2>
            <p>Register to Digital Notice Board System</p>

            @if ($errors->any())
                <div style="color:red;">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <!-- ✅ enctype added -->
            <form action="/s" method="post" enctype="multipart/form-data">
            @csrf

                <div class="input-group">
                    <!-- ✅ old() added -->
                    <input type="text" required name="name" value="{{ old('name') }}">
                    <label>Full Name</label>
                </div>
                @error('name')
                    <span style="color:red;">{{ $message }}</span>
                @enderror


                <div class="input-group">
                    <!-- ✅ type changed number → text -->
                    <input type="text" required name="ennumber" value="{{ old('ennumber') }}">
                    <label>Enrollement Number</label>
                </div>
                @error('ennumber')
                    <span style="color:red;">{{ $message }}</span>
                @enderror


                <div class="input-group">
                    <input type="password" required name="pd1">
                    <label>Password</label>
                </div>
                @error('pd1')
                    <span style="color:red;">{{ $message }}</span>
                @enderror


                <div class="input-group">
                    <input type="password" required name="pd2">
                    <label>Confirm Password</label>
                </div>
                @error('pd2')
                    <span style="color:red;">{{ $message }}</span>
                @enderror


                <!-- ✅ Empty label removed -->
                <div class="input-group">
                    <input type="file" required name="sem">
                </div>


                <button type="submit">Sign Up</button>

            </form>

            <div class="login-link">
                Already have an account? <a href="{{url('login')}}">Login</a>
            </div>

            <div class="footer-text">
                © 2026 Digital Notice Board System
            </div>

        </div>

    </div>

    </body>
    </html>
