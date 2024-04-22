<?php if(!Auth::check()): ?>

<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <div class="col-md-3 mb-2 mb-md-0">
<img src="../public/img/logo.png" width="200px" height="100px">
    </div>

    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href = '<?php echo e(URL::to('/katalog')); ?>' class="nav-link px-2 text-white">Каталог</a></li>
        <li><a href = '<?php echo e(URL::to('/where')); ?>' class="nav-link px-2 text-white">Где нас найти?</a></li>
        <li><a class="nav-link px-2 text-white" href = '<?php echo e(URL::to('/')); ?>'>О нас</a></li>
    </ul>

    <div class="col-md-3 text-end" >
        <button type="button" onclick=" window.location.href = '<?php echo e(URL::to('/login')); ?>'" class="btn btn-outline-light me-2">Войти</button>
        <button type="button" class="btn btn-warning" onclick="window.location.href='<?php echo e(URL::to('/reg')); ?>'">Регистрация</button>
    </div>
  </header>
<?php endif; ?>

<?php if(Auth::check()): ?>
<?php if(!Auth::user()->isAdmin): ?>
<div class="p-3 mb-3 border-bottom text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href = '<?php echo e(URL::to('/katalog')); ?>' class="nav-link px-2 text-white">Каталог</a></li>
                <li><a href = '<?php echo e(URL::to('/where')); ?>' class="nav-link px-2 text-white">Где нас найти?</a></li>
                <li><a class="nav-link px-2 text-white" href = '<?php echo e(URL::to('/')); ?>'>О нас</a></li>
        </ul>
    <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle show" data-bs-toggle="dropdown" aria-expanded="true">
    <img src="../public/img/noroot.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
        <ul class="dropdown-menu text-small">
            <li><a class="dropdown-item" href="<?php echo e(URL::to('/korzina')); ?>">Корзина</a></li>
            <li><a class="dropdown-item" href="<?php echo e(URL::to('/order')); ?>">Заказы</a></li>
            <li><a class="dropdown-item" href="<?php echo e(URL::to('/logout')); ?>">Выйти</a></li>
          </ul>
      </div>
    </div>
</div>
<?php else: ?>
<div class="px-3 py-2 text-bg-dark border-bottom">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
          </a>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
              <a href="<?php echo e(URL::to('/admin')); ?>" class="nav-link text-white">
                Каталог
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                Заказы
              </a>
            </li>
            <li>
              <a href="<?php echo e(URL::to('/logout')); ?>" class="nav-link text-white">
                Выйти
              </a>
            </li>
          </ul>
        </div>
      </div>
</div>
<?php endif; ?>
<?php endif; ?>
<?php /**PATH C:\OSPanel\domains\borovinskikh\tests\onlineShop\resources\views/head.blade.php ENDPATH**/ ?>