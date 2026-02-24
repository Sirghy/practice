<!doctype html>
<html lang="en">
   <head>
      <?php echo $__env->make('admin.admin_header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
      <?php echo app('Illuminate\Foundation\Vite')(['resources/css/calendar.css']); ?>

      <?php echo $__env->yieldPushContent('styles'); ?>
      <?php echo $__env->yieldPushContent('scripts'); ?>
   </head>

    
    <body class="sidebar-expand-lg sidebar-open bg-body-tertiary">

      <div class="app-wrapper">

      <?php echo $__env->make('admin.admin_nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
      <?php echo $__env->make('admin.admin_sideBar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
          <main class="app-main">
            <?php echo $__env->yieldContent('body_content'); ?>
        </main>
      <?php echo $__env->make('admin.admin_footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
      
    </div>
</body>
</html>
<?php /**PATH D:\work\web\PHP\laraHerd\Projects\massageRoom\resources\views/admin/admin_layout.blade.php ENDPATH**/ ?>