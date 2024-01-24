
<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(route('blog.index')); ?>" type="button" class="btn btn-success">all posts</a>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    show
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\blog\resources\views/blog/show.blade.php ENDPATH**/ ?>