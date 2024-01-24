;
<?php $__env->startSection('title'); ?>
    register
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="card">
    <h5>
        <?php echo e($message); ?>


    </h5>
</div>


<form method="post" action="<?php echo e(route('user.rigister')); ?>">
    <?php echo csrf_field(); ?>
    <div>
        <input type="text" class="form-controll" placeholder="name" name="name">
    </div>
    <div>
        <input type="email" class="form-controll" placeholder="email" name="email">
    </div>
    <div>
        <input type="password" class="form-controll" placeholder="password" name="password">
    </div>
    <div>
        <input type="password" class="form-controll" placeholder="repassword" name="confirm-password">
    </div>
    <button type="submit" class="btn btn-warning">rigister</button>
</form>
<div class="card">
    <h5>
        already hav an account?
    </h5>
<a href="<?php echo e(route('user.loginForm')); ?>" type="button" class="btn btn-success form-controll ">login</a>

</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\blog\resources\views/user/rigister.blade.php ENDPATH**/ ?>