
    <!-- КАЛЕНДАРЬ (DAY) -->
<?php echo $__env->make('calendar.day.calendar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


    <!-- ПРАВАЯ КОЛОНКА -->
<?php if(empty($isAdmin)): ?>
<?php echo $__env->make('calendar.day.infoBlock', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endif; ?>

<?php /**PATH D:\work\web\PHP\laraHerd\Projects\massageRoom\resources\views/calendar/calendarDay.blade.php ENDPATH**/ ?>