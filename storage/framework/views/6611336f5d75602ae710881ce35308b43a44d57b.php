<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        
        <title><?php echo e(config('app.name')); ?></title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <!-- bootstrap css -->
        <link rel="stylesheet" href="<?php echo e(asset('public/css/bootstrap.min.css')); ?>">
        <!-- my own css -->
        <link rel="stylesheet" href="<?php echo e(asset('public/css/style.css')); ?>">

<?php echo $__env->yieldContent('css'); ?>
        
    </head>
<body>

    <div class="container">

       <?php echo $__env->yieldContent('main'); ?>    

    </div>

<!-- axios(ajax) for Vue -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<!-- Vue -->
<script src="<?php echo e(asset('public/js/vue.min.js')); ?>"></script>
<!-- my own script -->
<script src="<?php echo e(asset('public/js/mine.js')); ?>"></script>

<?php echo $__env->yieldContent('js'); ?>

</body>

</html>
<?php /**PATH /var/www/html/factorydirections/resources/views/layout.blade.php ENDPATH**/ ?>