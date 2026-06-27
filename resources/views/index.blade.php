<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Digital Notice Board System</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>

<!-- ================= NAVBAR ================= -->
<header class="navbar">
    <div class="logo">📢 Digital Notice Board</div>
    <nav>
        <a href="#">Home</a>
        <!-- <a href="#">Notices</a> -->
       
        <a href="#">About</a>
        <a href="{{ url('login') }}" class="nav-btn">Login</a>
        <a href="{{url('admin')}}" class="nav-btn">Admin </a>
    </nav>
</header>

<!-- ================= HERO ================= -->
<section class="hero">
    <div class="hero-content">
        <h1>Smart Digital Notice Board Management System</h1>
        <p>Online Notice System for College & Office with Schedule and Expiry Feature</p>
        <a href="{{URL::to('/viewNotice')}}" class="btn primary">View Notices</a>
        <!-- <a href="{{ url('login') }}" class="btn secondary">User Login</a> -->

    </div>
</section>

<!-- ================= PROJECT OVERVIEW ================= -->
<section class="overview">
    <h2>Project Overview</h2>
    <p>
        Digital Notice Board Management System is a web-based application designed to
        replace traditional paper-based notice boards. This system allows administrators
        to upload notices online with schedule and expiry date, while students or staff
        can easily view notices anytime and anywhere.
    </p>

    <div class="overview-box">
        <div class="overview-card">
            <h3>🎯 Objective</h3>
            <p>
                To provide a centralized, paperless, and efficient notice management system
                for educational institutions and offices.
            </p>
        </div>

        <div class="overview-card">
            <h3>👥 Users</h3>
            <p>
                Admin: Upload, edit, schedule notices<br>
                Students/Staff: View notices category-wise
            </p>
        </div>

        <div class="overview-card">
            <h3>⚙ Technology</h3>
            <p>
                HTML, CSS, JavaScript<br>
                Laravel (Backend)<br>
                MySQL Database
            </p>
        </div>
    </div>
</section>

<!-- ================= LATEST NOTICES ================= -->

@if(session()->has('name'))
    <section class="notices">
    <h2>Latest Notices</h2>

    <div class="notice-box">
        <div class="card">
            <span class="tag exam">Exam</span>
            <h3>Internal Exam Notice</h3>
            <p>Internal exams will start from 15 March.</p>
            <small>📅 10 March 2026</small>
        </div>

        <div class="card">
            <span class="tag event">Event</span>
            <h3>Tech Fest 2026</h3>
            <p>Annual technical fest registration is open.</p>
            <small>📅 12 March 2026</small>
        </div>

        <div class="card">
            <span class="tag general">General</span>
            <h3>Holiday Announcement</h3>
            <p>College will remain closed on Monday.</p>
            <small>📅 14 March 2026</small>
        </div>
    </div>
</section>
    {{session('name')}}

@endif


<!-- ================= FEATURES ================= -->
<section class="features">
    <h2>System Features</h2>
    <div class="feature-box">
        <div class="feature">✔ Secure Admin Login</div>
        <div class="feature">✔ Notice Scheduling</div>
        <div class="feature">✔ Auto Expiry System</div>
        <div class="feature">✔ Category Wise Notices</div>
        <div class="feature">✔ Search & Filter</div>
        <div class="feature">✔ Mobile Friendly UI</div>
    </div>
</section>

<!-- ================= FOOTER ================= -->
<footer>
    <div class="footer-container">

        <div class="footer-box">
            <h3>Digital Notice Board</h3>
            <p>
                A smart and paperless notice management system
                for colleges and offices.
            </p>
        </div>

        <div class="footer-box">
            <h3>Quick Links</h3>
            <a href="#">Home</a>
            <a href="#">Notices</a>
            <a href="{{url('login')}}">Login</a>
            <a href="#">About</a>
        </div>

        <div class="footer-box">
            <h3>Project Info</h3>
            <p>Second Year Project</p>
            <p>Developed Using Laravel</p>
            <p>Academic Year: 2025–26</p>
        </div>

    </div>

    <div class="footer-bottom">
        © 2026 Digital Notice Board System | All Rights Reserved
    </div>
</footer>

</body>
</html>
