<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Пример веб-страницы</title>
  <link rel="stylesheet" href="app.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
 </head>
 <body>
    <!--header-->
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0">
          <img src="../public/img/logo.png" width="200px" height="100px">
        </div>
  
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
          <li><a href="about" class="nav-link px-2 link-secondary">О нас</a></li>
          <li><a href="katalog" class="nav-link px-2">Каталог</a></li>
          <li><a href="where" class="nav-link px-2">Где нас найти?</a></li>
        </ul>
  
        <div class="col-md-3 text-end" >
          <button type="button" class="btn btn-outline-primary me-2"><a href="login">Вход</a></button>
          <button type="button" class="btn btn-primary" ><a href="reg" class="text-white">Регистрация</a></button>
        </div>
      </header>
      <!--slider-->
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../public/img/one.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../public/img/two.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../public/img/one.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!--new-->
      <div class="new" style="text-align: center;color:#0a58ca"><h1>Печатаем будущее!</h1></div>
      <!--footer-->
      <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li><a href="about" class="nav-link px-2 link-secondary">О нас</a></li>
          <li><a href="katalog" class="nav-link px-2">Каталог</a></li>
          <li><a href="where" class="nav-link px-2">Где нас найти?</a></li>
        </ul>
        <p class="text-center text-muted">© 2024 Copy Star</p>
      </footer>
 </body>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>