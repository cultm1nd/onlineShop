<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
   <title>Tasksman</title>
   <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
   <h1>регистрация</h1>
   <form method="POST" action="<?php echo e(route('user.reg')); ?>">
    <?php echo csrf_field(); ?>
    
    <input id="email" name="email" type="text" placeholder="Email">
    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <div><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    
    <input id="password" name="password" type="password" placeholder="Password">
    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <div><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <button type="submit" name="sendMe" value="1">Войти</button>
</form>
</body>
</html><?php /**PATH C:\OSPanel\domains\borovinskikh\tests\reg\resources\views/registration.blade.php ENDPATH**/ ?>