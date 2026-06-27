<!DOCTYPE html>
<html>
<head>
<title>Event Details</title>
<link rel="stylesheet" href="{{ asset('css/notice.css') }}">
</head>
<body>

<div class="container">
    <div class="detail-card">
        <h1>🎉 Annual Cultural Fest 2026</h1>
        @foreach($data as $d)
                <div class="event-box">
                    <p><strong>Date:</strong> {{ $d->event_date }}</p>
                    <p><strong>Venue:</strong> {{ $d->venue }}</p>
                    <p><strong>Event:</strong> {{ $d->events }}</p>
                    <hr>
                </div>
            @endforeach
        <a href="{{url('viewNotice')}}" class="btn">⬅ Back</a>
    </div>
</div>

</body>
</html>