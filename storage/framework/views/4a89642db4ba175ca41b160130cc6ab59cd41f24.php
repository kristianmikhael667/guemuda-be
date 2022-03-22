<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>GueMuda | Page <?php echo e($page); ?></title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="<?php echo e('/css/main.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo e('/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo e('/css/color.css'); ?>">
    <link rel="stylesheet" href="<?php echo e('/css/responsive.css'); ?>">
    <link href="<?php echo e('/plugins/apex/apexcharts.css'); ?>" rel="stylesheet" type="text/css">
</head>

<body>

    <?php echo $__env->make('loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div>
        <?php echo $__env->yieldContent('container'); ?>
    </div>

    <script src="<?php echo e('/js/main.min.js'); ?>"></script>
    <script src="<?php echo e('/js/vivus.min.js'); ?>"></script>
    <script src="<?php echo e('/js/script.js'); ?>"></script>

    <script src="<?php echo e('/plugins/apex/apexcharts.min.js'); ?>"></script>
    <script src="<?php echo e('/js/graphs-scripts.js'); ?>"></script>


</body>

</html><?php /**PATH /Users/mike/laravel/Gue-Muda/resources/views/layouts/main.blade.php ENDPATH**/ ?>