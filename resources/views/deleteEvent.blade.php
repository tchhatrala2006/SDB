<!DOCTYPE html>
<html>
<head>
    <title>Delete Event - Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins', sans-serif;
}

body{
    background: linear-gradient(135deg, #4f46e5, #7c3aed);
    min-height:100vh;
}

/* Layout */
.layout{
    display:flex;
    min-height:100vh;
}

/* Sidebar */
.sidebar{
    width:260px;
    background:rgba(0,0,0,0.4);
    backdrop-filter:blur(10px);
    padding:30px 25px;
    color:#fff;
}

.logo{
    font-size:22px;
    font-weight:600;
    margin-bottom:40px;
}

.menu a{
    display:block;
    padding:14px 18px;
    margin-bottom:12px;
    border-radius:12px;
    text-decoration:none;
    color:#e0e7ff;
    font-size:15px;
    transition:0.3s;
}

.menu a:hover{
    background:rgba(255,255,255,0.2);
}

.menu .active{
    background:rgba(255,255,255,0.25);
}

/* Main */
.main{
    flex:1;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:40px;
}

/* Glass Card (Same as Exam Page) */
.card{
    width:450px;
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(15px);
    padding: 35px;
    border-radius: 16px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.2);
    color: #fff;
}

.card h2{
    text-align:center;
    margin-bottom:25px;
    font-weight:600;
}

.form-group{
    margin-bottom:18px;
}

label{
    font-size:14px;
    margin-bottom:6px;
    display:block;
}

input, textarea{
    width:100%;
    padding:10px 12px;
    border-radius:8px;
    border:none;
    outline:none;
    font-size:14px;
}

input:focus, textarea:focus{
    box-shadow:0 0 0 2px #a78bfa;
}

textarea{
    resize:none;
}

#btn1{
    width:100%;
    padding:12px;
    border-radius:8px;
    border:none;
    background:#fff;
    color:#4f46e5;
    font-weight:600;
    cursor:pointer;
    transition:0.3s;
    margin-top:10px;
}

#btn1:hover{
    background:#e0e7ff;
}

/* Responsive */
@media(max-width:768px){
    .layout{
        flex-direction:column;
    }
    .sidebar{
        width:100%;
    }
    .main{
        padding:20px;
    }
}
 #btn{
       margin-top: 1%;
    margin-left: 1%;
    padding: 10px;
    width: 93px;
    background-color: tomato;
    color: white;
    border-radius: 10px;
    outline: none;
    font-family: monospace;
    font-size: larger;
    text-transform: capitalize;
        height: 44px;
}
#btn:hover{
    transform: scale(1.1);
    transition: all 1s;
     font-size: 15px;
     color:red;
     background-color: transparent;
       cursor: pointer;
}
</style>
</head>

<body>

<div class="layout">

    <!-- Sidebar -->


    <!-- Main Content -->
     
  <button id="btn">⬅ Back</button>
    <div class="main">
        <div class="card">
            <h2>🎉 Delete Event</h2>

            <form method="POST" action="/devent">
                @csrf

                <!-- <div class="form-group">
                    <label>Event Date</label>
                    <input type="date" name="event_date" required>
                </div> -->

                <div class="form-group">
                    <label>Venue</label>
                    <input type="text" name="venue" placeholder="Enter Venue Name" required>
                </div>

                <!-- <div class="form-group">
                    <label>Events (One per line)</label>
                    <textarea name="events" rows="4" required></textarea>
                </div> -->

                <button type="submit" id="btn1">Delete Event</button>
            </form>
        </div>
    </div>

</div>
<script>
    let btn=document.getElementById("btn")
    btn.addEventListener("click",function(){
        window.location.href="/DN";
    })
</script>
</body>
</html>