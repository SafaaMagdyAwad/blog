;
<?php $__env->startSection('title'); ?>
    login
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <h5>
        login
    </h5>
</div>
<form method="post" action="<?php echo e(route('user.login')); ?>">
    <?php echo csrf_field(); ?>
    
    <div>
        <input type="email" class="form-controll" placeholder="email" name="email">
    </div>
    <div>
        <input type="password" class="form-controll" placeholder="password" name="password">
    </div>
    <button type="submit" class="btn btn-success">login</button>
</form>
<div class="card">
    <h5>
        dont have an account?
    </h5>
<a href="<?php echo e(route('user.rigisterForm')); ?>" type="button" class="btn btn-warning form-controll ">rigister</a>

</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\blog\resources\views/user/login.blade.php ENDPATH**/ ?>