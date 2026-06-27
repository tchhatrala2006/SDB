<!DOCTYPE html>
<html>
<head>
    <title>Add Exam Schedule</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #4f46e5, #7c3aed);
        }

        .card {
            width: 380px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(15px);
            padding: 35px;
            border-radius: 16px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            color: #fff;
            margin-left:120%;
        }

        .card h2 {
            text-align: center;
            margin-bottom: 25px;
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            font-size: 14px;
            margin-bottom: 6px;
            display: block;
        }

        input {
            width: 100%;
            padding: 10px 12px;
            border-radius: 8px;
            border: none;
            outline: none;
            font-size: 14px;
        }

        input:focus {
            box-shadow: 0 0 0 2px #a78bfa;
        }

        #btn1 {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: none;
            background: #fff;
            color: #4f46e5;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 10px;
        }

        #btn1:hover {
            background: #e0e7ff;
        }
             #btn{
           margin-top: -50%;
    margin-left: -65%;
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
       <button id="btn">⬅ Back</button>
    <form action="/Update" method="post">
    @csrf
    <div class="card">
        <h2>📝 Update Exam Schedule</h2>

        <div class="form-group">
            <label>Change Id</label>
            <input type="number" name="id">
        </div>

        <div class="form-group">
            <label>Exam Date</label>
            <input type="date" name="date">
        </div>

        <div class="form-group">
            <label>Subject</label>
            <input type="text" placeholder="Enter Subject" name="subject">
        </div>

        <button type="submit" id="btn1">Add Exam</button>
    </div>
</form>
<script>
    let btn=document.getElementById("btn")
    btn.addEventListener("click",function(){
        window.location.href="/DN";
    })
</script>
</body>
</html>