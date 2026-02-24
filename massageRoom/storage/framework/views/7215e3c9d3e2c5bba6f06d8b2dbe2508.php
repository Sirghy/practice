<?php $__env->startSection('title', 'Calendar'); ?>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />



    <?php echo $__env->make('calendar._assets', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>



<?php $__env->startSection('nav_title', 'Calendar'); ?>
<?php $__env->startSection('body_content'); ?>

<?php echo $__env->make('calendar.calendar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\work\web\PHP\laraHerd\Projects\massageRoom\resources\views/calendar/index.blade.php ENDPATH**/ ?>