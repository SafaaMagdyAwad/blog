

<?php $__env->startSection('title'); ?>
    edit post
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <form method="post" action="<?php echo e(Route('post.update',$post['id'],)); ?>">
        <?php echo csrf_field(); ?>
        <div>
            <input type="text" class="form-controll" placeholder="<?php echo e($post['title']); ?>" name="title">
        </div>
    
    
        <div>
            <input type="text" class="form-controll" placeholder="<?php echo e($post['discription']); ?>" name="discription" >
        </div>
        
        <button type="submit" class="btn btn-success">edit</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\blog\resources\views/post/edit.blade.php ENDPATH**/ ?>