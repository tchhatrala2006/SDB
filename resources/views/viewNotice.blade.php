<!DOCTYPE html>
<html>
<head>
    <title>College Notice Board</title>
    <!-- <link rel="stylesheet" href="{{ asset('css/notice.css') }}"> -->
</head>
<style>
/* Body Styling */
body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #0f172a, #1e293b);
    color: #f1f5f9;
}

/* Container */
.container {
    padding: 40px;
    text-align: center;
}

/* Main Title */
.main-title {
    font-size: 40px;
    margin-bottom: 40px;
    color: #38bdf8;
}

/* Grid Layout */
.notice-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
}

/* Card Common Style */
.card {
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.4);
    transition: 0.4s ease;
    text-align: left;
}

.card:hover {
    transform: translateY(-10px);
}

/* Button */
.btn {
    display: inline-block;
    margin-top: 15px;
    padding: 8px 18px;
    border-radius: 20px;
    text-decoration: none;
    font-weight: bold;
    transition: 0.3s;
}

/* Event Card */
.event {
    background: linear-gradient(135deg, #9333ea, #6366f1);
}
.event .btn {
    background: #fff;
    color: #6366f1;
}

/* Academic Card */
.academic {
    background: linear-gradient(135deg, #0ea5e9, #06b6d4);
}
.academic .btn {
    background: #fff;
    color: #0ea5e9;
}

/* Exam Card */
.exam {
    background: linear-gradient(135deg, #ef4444, #f97316);
}
.exam .btn {
    background: #fff;
    color: #ef4444;
}

/* Sport Card */
.sport {
    background: linear-gradient(135deg, #22c55e, #16a34a);
}
.sport .btn {
    background: #fff;
    color: #16a34a;
}

/* Responsive */
@media(max-width:768px){
    .main-title{
        font-size:28px;
    }
}
footer{
    background:#111827;
    color:#d1d5db;
}

.footer-container{
    display:flex;
    justify-content:space-around;
    padding:50px;
}

.footer-box h3{
    color:#fff;
    margin-bottom:10px;
}

.footer-box a{
    display:block;
    color:#d1d5db;
    text-decoration:none;
    margin:5px 0;
}

.footer-bottom{
    text-align:center;
    padding:15px;
    background:#0f172a;
    font-size:14px;
}
#btn{
           margin-top: 18px;
    margin-left: 30px;
    padding: 10px;
    width: 93px;
    background-color: tomato;
    color: white;
    border-radius: 10px;
    outline: none;
    font-family: monospace;
    font-size: larger;
    text-transform: capitalize;
}
#btn:hover{
    transform: scale(1.1);
    transition: all 1s;
     font-size: 15px;
     color:red;
     background-color: transparent;
}

</style>
<body>
<button id="btn">⬅ Back</button>
<div class="container">
    <h1 class="main-title">📢 College Notice Board</h1>

    <div class="notice-grid">

        <!-- Event Notice -->
        <div class="card event">
            <h2>🎉 Event Notice</h2>
            <p><strong>Title:</strong> Annual Cultural Fest</p>
            <p><strong>Date:</strong> 25 March 2026</p>
            <p>All students are invited to participate in dance, singing and drama competitions.</p>
            <a href="{{url('/event-details') }}" class="btn">View Details</a>
        </div>

        <!-- Academic Notice -->
        <div class="card academic">
            <h2>📚 Academic Notice</h2>
            <p><strong>Title:</strong> Assignment Submission</p>
            <p><strong>Last Date:</strong> 28 February 2026</p>
            <p>All students must submit their internal assignment before deadline.</p>
            <a href="{{url('/academic-details')}}" class="btn">Read More</a>
        </div>

        <!-- Exam Notice -->
        <div class="card exam">
            <h2>📝 Exam Notice</h2>
            <p><strong>Exam:</strong> Semester 4 Final Exam</p>
            <p><strong>Start Date:</strong> 10 April 2026</p>
            <p>Check timetable and exam center details from exam section.</p>
            <a href="{{url('/examdt')}}" class="btn">Check Timetable</a>
        </div>

        <!-- Sport Notice -->
        <div class="card sport">
            <h2>🏆 Sport Notice</h2>
            <p><strong>Tournament:</strong> Inter College Cricket</p>
            <p><strong>Registration Last Date:</strong> 5 March 2026</p>
            <p>Interested students can register for cricket, football and volleyball.</p>
            <a href="{{url('/sport-register')}}" class="btn">Register Now</a>
        </div>

    </div>
</div>
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
            <a href="{{url('index')}}">Home</a>
            <!-- <a href="#">Notices</a> -->
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
<script>
    let btn=document.getElementById("btn")
    btn.addEventListener("click",function(){
        window.location.href="index";
    })
</script>
</body>
</html>