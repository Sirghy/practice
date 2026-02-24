<div class="card bg-info sidebar-widget">
    <div class="card-body text-center p-2">
        <h6 class="mb-1"><?php echo e($weather['name']); ?></h6>
        <div class="temp"><?php echo e(round($weather['main']['temp'])); ?>°C</div>
        <small><?php echo e(ucfirst($weather['weather'][0]['description'])); ?></small>
    </div>
</div>

<br>

<div class="card bg-secondary sidebar-widget">
    <div class="card-body p-2">
        <h6 class="text-center mb-2">💱 Currency</h6>

        <?php $__empty_1 = true; $__currentLoopData = $rates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="small text-center">
                <?php echo e($rate['text']); ?>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <small class="text-muted">No data</small>
        <?php endif; ?>
    </div>
</div>

<br>

<div class="card bg-warning sidebar-widget">
    <div class="card-body p-2">
        <h6 class="text-center mb-1">♌ Гороскоп</h6>

        <?php if(!empty($horoscope)): ?>
            <small class="d-block text-muted mb-1">
                <?php echo e($horoscope['current_date']); ?>

            </small>

            <div class="small">
                <?php echo e($horoscope['description']); ?>

            </div>

            <hr class="my-1">

            <div class="small">
                ❤️ Любовь: <?php echo e($horoscope['love_compatibility']); ?> <br>
                😊 Настроение: <?php echo e($horoscope['mood']); ?> <br>
                🔢 Удача: <?php echo e($horoscope['lucky_number']); ?>

            </div>
        <?php else: ?>
            <small class="text-muted">Нет данных</small>
        <?php endif; ?>
    </div>
</div>

<?php /**PATH D:\work\web\PHP\laraHerd\Projects\massageRoom\resources\views/admin/widgets/sideBarWidgets.blade.php ENDPATH**/ ?>