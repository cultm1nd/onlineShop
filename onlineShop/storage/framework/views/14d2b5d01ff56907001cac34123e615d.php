<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="height: 100vh; overflow-x: hidden">
    <header><?php echo $__env->make('head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></header>

    <section style="height: max-content;" class="p-3"><?php echo $__env->yieldContent('content'); ?></section>

    <footer style="flex: 0 0 auto"><?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
<?php /**PATH C:\OSPanel\domains\borovinskikh\tests\onlineShop\resources\views/Layout.blade.php ENDPATH**/ ?>