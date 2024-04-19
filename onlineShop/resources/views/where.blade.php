<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Пример веб-страницы</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
 </head>
 <body>
    <!--header-->
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0">
          <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
            <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
          </a>
        </div>
  
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
          <li><a href="about" class="nav-link px-2 link-secondary">О нас</a></li>
          <li><a href="katalog" class="nav-link px-2">Каталог</a></li>
          <li><a href="where" class="nav-link px-2">Где нас найти?</a></li>
        </ul>
  
        <div class="col-md-3 text-end">
          <button type="button" class="btn btn-outline-primary me-2">Вход</button>
          <button type="button" class="btn btn-primary">Регистрация</button>
        </div>
      </header>
      <!--map-->
      <div style="display:grid; justify-content:center;overflow:hidden;"><a href="https://yandex.ru/maps/11164/kamensk-uralskiy/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Каменск‑Уральский</a><a href="https://yandex.ru/maps/geo/kamensk_uralskiy/53159399/?ll=61.925444%2C56.413479&source=serp_navig&utm_medium=mapframe&utm_source=maps&z=14.15" style="color:#eee;font-size:12px;position:absolute;top:14px;">Каменск-Уральский — Яндекс Карты</a><iframe src="https://yandex.ru/map-widget/v1/?ll=61.925444%2C56.413479&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgg1MzE1OTM5ORJY0KDQvtGB0YHQuNGPLCDQodCy0LXRgNC00LvQvtCy0YHQutCw0Y8g0L7QsdC70LDRgdGC0YwsINCa0LDQvNC10L3RgdC6LdCj0YDQsNC70YzRgdC60LjQuSIKDcqrd0IVNalhQg%2C%2C&source=serp_navig&z=14.15" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
      <!--inf-->
      <div class="inf">
        <h1>Контактные данные</h1>
        <p>Адрес:<span>ул.Пушкина, дом 21</span>  </p>
        <p>Номер телефона: <span>88005553535</span></p>
        <p>Электронная почта: <span>CopyStar@mail.ru</span></p>
      </div>
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