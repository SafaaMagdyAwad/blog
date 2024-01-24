

<?php $__env->startSection('title'); ?>


welcome 
<?php echo e($user['name']); ?>

 to your home  
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="card text_success">
        <?php echo e($user['name']); ?>

    </div>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card">
        <div class="h1"> <?php echo e($post['title']); ?></div>
        <p><?php echo e($post['discription']); ?> </p>
        <a href="/post/<?php echo e($post['id']); ?>/edit/<?php echo e($user['id']); ?>" type="button" class="btn btn-warning">edit</a>
        <a href="<?php echo e(route('post.delete',$post['id'])); ?>" type="button" class="btn btn-danger form_control">delete</a>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    

</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\blog\resources\views/user/profile.blade.php ENDPATH**/ ?>