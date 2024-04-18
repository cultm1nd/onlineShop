<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Пример веб-страницы</title>
  <link rel="stylesheet" href="app.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
 </head>
 <body>
<form method="POST" action="<?php echo e(route('user.reg')); ?>">
    <div class="form-group">
      <label for="exampleInputEmail1">Имя</label>
      <input type="text" name="firstName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Фамилия</label>
        <input type="text" name="secondName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Отчество</label>
        <input type="text" name="thirdName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Логин</label>
        <input type="text" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Электронная почта</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Пароль</label>
        <input type="password" name="firstPas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Повторите пароль</label>
        <input type="password" name="secondPas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Согласен с правилами регистрации</label>
    </div>
    <button type="submit" class="btn btn-primary">Зарегестрироваться</button>
  </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html><?php /**PATH C:\OSPanel\domains\borovinskikh\tests\onlineShop\resources\views/registration.blade.php ENDPATH**/ ?>