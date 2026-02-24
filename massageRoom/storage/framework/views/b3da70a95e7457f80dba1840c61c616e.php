<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title','layout'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('newBootstrap/css/bootstrap.min.css')); ?>">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/css/layout.css', 'resources/css/app_layout.css','resources/css/calendar.css', 'resources/js/app.js']); ?>
    <script src="<?php echo e(asset('newBootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('styles'); ?>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</head>
<body class="app_layout">
    <?php echo $__env->make('partials.nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
   <main class="flex-grow-1">

      <?php echo $__env->yieldContent('body_content'); ?>
   </main>

   <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</body>
</html>
<?php /**PATH D:\work\web\PHP\laraHerd\Projects\massageRoom\resources\views/layout.blade.php ENDPATH**/ ?>