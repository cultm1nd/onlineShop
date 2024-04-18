<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Пример веб-страницы</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
 </head>
 <body>
<form method="POST" action="{{route('user.login')}}">
    <!--login-->
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Логин</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>
    @error('email')
    <div>{{$message}}</div>
    @enderror
     <!--password-->
    <div class="form-group">
      <label for="exampleInputPassword1">Пароль</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" >
    </div>
    @error('password')
    <div>{{$message}}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Войти</button>
  </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>