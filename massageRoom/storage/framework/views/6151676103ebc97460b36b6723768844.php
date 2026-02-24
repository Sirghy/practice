

<?php $__env->startPush('scripts'); ?>
<?php echo $__env->make('calendar._assets', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('body_content'); ?>
  <?php echo $__env->make('calendar.calendar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('admin.admin_layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\work\web\PHP\laraHerd\Projects\massageRoom\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>