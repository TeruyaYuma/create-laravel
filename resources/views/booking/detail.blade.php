<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        {{ $booking->id}}
    </div>
    <div>
        {{ $booking->due_date}}
    </div>
    <div>
        {{ $booking->user->name}}
    </div>
    <div>
    {{ $booking->treatment->name}}
    </div>
    <div>
    {{ $booking->time->time}}
    </div>
    <div>
        <img src="/{{ $img_url}}" alt="">
    </div>
    <div>
        {{ $booking->comment}}
    </div>
</body>
</html>