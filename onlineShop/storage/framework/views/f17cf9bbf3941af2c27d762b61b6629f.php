
<?php $__env->startSection('content'); ?>
<div class="d-flex align-items-center py-4 bg-body-tertiary m-0 h-100">
    <main class="form-signin w-50 m-auto p-5">
  <form method="POST" action="<?php echo e(URL::to('/register')); ?>" onsubmit="event.preventDefault(); Validate();">
    <?php echo csrf_field(); ?>
    <h1 class="h3 mb-3 fw-normal">Регистрация<a href="<?php echo e(URL::to('/login')); ?>">Войти</a></h1>
    <div class="form-floating m-2">
      <input class="form-control" id="floatingInput surname" placeholder="Surname" name="surname">
      <label for="floatingInput">Фамилия</label>
      <?php $__errorArgs = ['surname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <p><?php echo e($message); ?></p>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="form-floating m-2">
      <input class="form-control" id="floatingInput name" placeholder="Name" name="name">
      <label for="floatingInput">Имя</label>
      <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <p><?php echo e($message); ?></p>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="form-floating m-2">
      <input class="form-control" id="floatingInput" placeholder="Patronymic" name="patr">
      <label for="floatingInput">Отчество</label>
      <?php $__errorArgs = ['patr'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <p><?php echo e($message); ?></p>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="form-floating m-2">
      <input class="form-control" id="floatingInput login" placeholder="Login" name="login">
      <label for="floatingInput">Логин</label>
      <?php $__errorArgs = ['login'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <p><?php echo e($message); ?></p>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="form-floating m-2">
      <input type="email" class="form-control" id="floatingInput email" placeholder="name@example.com" name="email">
      <label for="floatingInput">Электронная почта</label>
      <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <p><?php echo e($message); ?></p>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="form-floating m-2">
      <input type="password" class="form-control password" id="floatingPassword " placeholder="Password" name="password">
      <label for="floatingPassword">Пароль</label>
      <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <p><?php echo e($message); ?></p>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="form-floating m-2">
      <input type="password" class="form-control rpassword" id="floatingPassword d" placeholder="Password" name="password_repeat">
      <label for="floatingPassword">Повторите пароль</label>
    </div>
    <div class="m-2">
        <input type="checkbox" class=" rules" id="floatingPassword" name="rules">
      <label for="floatingPassword">Согласен с правилами</label>
    </div>
    <button class="btn btn-primary w-100 py-2 m-auto" type="submit">Готово</button>
  </form>
    </main>
</div>
<script src="../public/signUp.js">
<?php $__env->stopSection(); ?>
<?php echo $__env->yieldSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\borovinskikh\tests\onlineShop\resources\views/registration.blade.php ENDPATH**/ ?>