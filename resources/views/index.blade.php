<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
    {{-- <h1></h1>
    <ul>
        @foreach ($users as $user)
            <li>{{$user}}</li>
        @endforeach
    </ul> --}}
    <form action="newsletter" method="POST">
        @csrf
        name: <input type="text" name="name"><br><br>
        email: <input type="text" name="email"><br><br>
        <input type="submit">
    </form>
</body>
</html>