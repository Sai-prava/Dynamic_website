<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booking In Mail</title>
</head>
<body>
    <p>Name: {{$request['name']}}</p>
    <p>Email: {{$request['email']}}</p>
    <p>Date&Time :{{$request['date']}}</p>
    <p>People :{{$request['people']}}</p>
    <p>Message :{{$request['message']}}</p>
</body>
</html>