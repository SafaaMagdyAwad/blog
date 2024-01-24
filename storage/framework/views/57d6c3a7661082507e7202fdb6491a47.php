;
<?php $__env->startSection('title'); ?>
    welcome
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
    <h1>welcome.</h1>
    <h5>
        main page
    </h5>

</div>

<a href="<?php echo e(route('user.rigisterForm')); ?>" type="button" class="btn btn-warning">rigister</a>
<a href="<?php echo e(route('user.loginForm')); ?>" type="button" class="btn btn-success">login</a>


    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\blog\resources\views/welcome.blade.php ENDPATH**/ ?>