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
   <h1>это приватная страница</h1>
   <p>сюда попадают только аутентифицированные пользователи</p>
</form>
</body>
</html>