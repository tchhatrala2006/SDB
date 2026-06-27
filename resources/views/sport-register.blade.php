<!DOCTYPE html>
<html>
<head>
<title>Sport Registration</title>
<link rel="stylesheet" href="{{ asset('css/notice.css') }}">
</head>
<body>

<div class="container">
    <div class="detail-card">
        <h1>🏆 Sport Registration Form</h1>

        <form method="POST" action="sp">
            @csrf
            <input type="text" name="name" placeholder="Enter Name" required><br><br>
            <input type="text" name="enrollment" placeholder="Enrollment Number" required><br><br>

            <select name="game">
                <option value="">Select Game</option>
                <option>Cricket</option>
                <option>Football</option>
                <option>Volleyball</option>
            </select><br><br>

            <button type="submit" class="btn">Submit</button>
        </form>

        <br>
        <a href="{{url('viewNotice')}}" class="btn">⬅ Back</a>
    </div>
</div>

</body>
</html>