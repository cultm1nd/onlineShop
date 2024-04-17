<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>Tasksman</title>
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
   <h1>регистрация</h1>
   <form method="POST" action="{{route('user.reg')}}">
    @csrf
    {{-- login --}}
    <input id="email" name="email" type="text" placeholder="Email">
    @error('email')
    <div>{{$message}}</div>
    @enderror
    {{-- password --}}
    <input id="password" name="password" type="password" placeholder="Password">
    @error('password')
    <div>{{$message}}</div>
    @enderror
    <button type="submit" name="sendMe" value="1">Войти</button>
</form>
</body>
</html>