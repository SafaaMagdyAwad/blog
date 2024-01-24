

<?php $__env->startSection('title'); ?>
    create post
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="m_5">
        <h1>
            create your post :)
        </h1>
    </div>
</div>


    <form method="post" action="<?php echo e(route('post.store',$user['id'])); ?>">
        <?php echo csrf_field(); ?>
        <div>
            <input type="text" class="form-controll" placeholder="title" name="title">
        </div>
        <div>
            <input  class="form-controll" placeholder="title" name="user_id" value="<?php echo e($user['id']); ?>" hidden >
        </div>
        <div>
            <input type="text" class="form-controll" placeholder="discription" name="discription">
        </div>
        <div>
            <input type="text" class="form-controll" placeholder="creator" name="creator" value="<?php echo e($user['name']); ?>" hidden >
        </div>
        <button type="submit" class="btn btn-success">send</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\blog\resources\views/post/create.blade.php ENDPATH**/ ?>