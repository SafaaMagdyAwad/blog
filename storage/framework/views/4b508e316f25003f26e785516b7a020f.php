

<?php $__env->startSection('title'); ?>
    edit post
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form >
        <?php echo csrf_field(); ?>
        <div>
            <input type="text" class="form-controll" placeholder="title" name="title">
        </div>
        <div>
            <input type="text" class="form-controll" placeholder="discription" name="discription">
        </div>
        <div>
            <input type="text" class="form-controll" placeholder="creator" name="creator">
        </div>
        <button type="submit" class="btn btn-success">edit</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\blog\resources\views/blog/edit.blade.php ENDPATH**/ ?>