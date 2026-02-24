<div class="card bg-info sidebar-widget">
    <div class="card-body text-center p-2">
        <h6 class="mb-1"><?php echo e($weather['name']); ?></h6>
        <div class="temp"><?php echo e(round($weather['main']['temp'])); ?>°C</div>
        <small><?php echo e(ucfirst($weather['weather'][0]['description'])); ?></small>
    </div>
</div>
<?php /**PATH D:\work\web\PHP\laraHerd\Projects\massageRoom\resources\views/admin/widgets/weather.blade.php ENDPATH**/ ?>