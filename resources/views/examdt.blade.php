<!DOCTYPE html>
<html>
<head>
<title>Exam Timetable</title>
<link rel="stylesheet" href="{{ asset('css/notice.css') }}">
</head>
<body>

<div class="container">
    <div class="detail-card">
        <h1>📝 Semester 4 Final Exam</h1>

        <table border="1" width="100%" cellpadding="10">
            <tr>
                <th>Date</th>
                <th>Subject</th>
            </tr>

            @foreach ($data as $d)
            <tr>
                <td>{{ $d->date }}</td>
                <td>{{ $d->subject }}</td>
            </tr>
            @endforeach

        </table>

        <br>
        <a href="{{url('viewNotice')}}" class="btn">⬅ Back</a>
    </div>
</div>

</body>
</html>