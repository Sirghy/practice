<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('newBootstrap/css/bootstrap.min.css')); ?>">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/css/layout.css', 'resources/js/app.js']); ?>
    <script src="<?php echo e(asset('newBootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
</head>

<body>

    <nav class="navbar navbar-dark bg-dark p-3 position-relative">
        <div class="d-flex gap-1  justify-between">
            <button class="btn btn-info btn-outline-light btn-lg text-red-500">
                Записаться на приём
            </button>
            <a class="navbar-brand mx-auto position-absolute start-50 translate-middle-x" href="#">Main Page!</a>
        </div>

        <div class="d-flex gap-1 nav-btn">
            <button class="btn btn-primary">Location</button>
            <a class="btn btn-success" href="calendar/index">Calendar</a>
            <button class="btn btn-warning">Reviews</button>
            <button class="btn btn-danger ">Login</button>
            <button class="btn btn-outline-light btn-no-hover">Lang</button>
        </div>
    </nav>
    <main class="container py-5">
        <div class="grid-layout">
            <div class="text-block">
                <h2>Профессиональный массаж</h2>
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
    </main>
    <footer class="text-body-secondary border-top">
        <div class="flex flex-col gap-7 py-3 px-3 bg-yellow-300">
            <div class="flex items-center gap-7 justify-between">
                <ul class="flex gap-3">
                    <li>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="size-8 fill-blue-700 hover:fill-violet-300">
                                <path d="M576 320C576 178.6 461.4 64 320 64C178.6 64 64 178.6 64 320C64 440 146.7 540.8 258.2 568.5L258.2 398.2L205.4 398.2L205.4 320L258.2 320L258.2 286.3C258.2 199.2 297.6 158.8 383.2 158.8C399.4 158.8 427.4 162 438.9 165.2L438.9 236C432.9 235.4 422.4 235 409.3 235C367.3 235 351.1 250.9 351.1 292.2L351.1 320L434.7 320L420.3 398.2L351 398.2L351 574.1C477.8 558.8 576 450.9 576 320z" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="size-8 fill-[#0088cc] hover:fill-[#4dbff5]">
                                <path d="M320 72C183 72 72 183 72 320C72 457 183 568 320 568C457 568 568 457 568 320C568 183 457 72 320 72zM435 240.7C431.3 279.9 415.1 375.1 406.9 419C403.4 437.6 396.6 443.8 390 444.4C375.6 445.7 364.7 434.9 350.7 425.7C328.9 411.4 316.5 402.5 295.4 388.5C270.9 372.4 286.8 363.5 300.7 349C304.4 345.2 367.8 287.5 369 282.3C369.2 281.6 369.3 279.2 367.8 277.9C366.3 276.6 364.2 277.1 362.7 277.4C360.5 277.9 325.6 300.9 258.1 346.5C248.2 353.3 239.2 356.6 231.2 356.4C222.3 356.2 205.3 351.4 192.6 347.3C177.1 342.3 164.7 339.6 165.8 331C166.4 326.5 172.5 322 184.2 317.3C256.5 285.8 304.7 265 328.8 255C397.7 226.4 412 221.4 421.3 221.2C423.4 221.2 427.9 221.7 430.9 224.1C432.9 225.8 434.1 228.2 434.4 230.8C434.9 234 435 237.3 434.8 240.6z" />
                            </svg>
                        </a>
                    </li>
                </ul>
                <p class="text-sm text-red-500 text-center">&copy; <?php echo e(date('Y')); ?>All Rights Reserved</p>

            </div>
        </div>
    </footer>

</body>

</html><?php /**PATH E:\Web\LocalServer\OSPanel\home\massageRoom\resources\views/home.blade.php ENDPATH**/ ?>