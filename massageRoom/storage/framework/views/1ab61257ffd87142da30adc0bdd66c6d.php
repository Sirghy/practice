<?php $__env->startSection('title','Home'); ?>




<?php $__env->startSection('body_content'); ?>

    <div class="container py-5">
        <div class="grid-layout">
            <div class="text-block">
                <h2>Professional massage</h2>
                <p>Текст слева до высоты IMG1. Здесь пишем вводную информацию...</p>
            </div>

            <img src="<?php echo e(Vite::asset('resources/images/1.jpg')); ?>" alt="Massage 1" class="img1">

            <img src="<?php echo e(Vite::asset('resources/images/3.jpg')); ?>" alt="Massage 3" class="img3">

            <div class="text-middle">
                <p>Это текст посередине, рядом с IMG3 и IMG2.</p>
            </div>

            <img src="<?php echo e(Vite::asset('resources/images/2.jpg')); ?>" alt="Massage 2" class="img2">

            <div class="text-bottom">
                <p>Текст продолжается под IMG2. Здесь можно написать о пользе массажа...</p>
            </div>

        </div>
        <div class="bottom-block">
            <div class="video">
                <iframe width="360" height="315" src="https://www.youtube.com/embed/dn-iTZcUUfY"" allowfullscreen></iframe>
            </div>
            <div class=" video">
                    <iframe width="360" height="315" src="https://www.youtube.com/embed/dZnH7uFJ0i8" allowfullscreen></iframe>
            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\work\web\PHP\laraHerd\Projects\massageRoom\resources\views/home.blade.php ENDPATH**/ ?>