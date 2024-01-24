
<?php $__env->startSection('content'); ?>
     <div class="card">
        <div class="container">
            <div class="mb_3">
                <h3>title: <?php echo e($post['title']); ?></h3>
                <h4>created at: <?php echo e($post['created_at']); ?></h4>
            </div>
        </div>
     </div>
     <div class="card">
        <div class="container">
            <div class="mb_3">
                <h6>discription: <?php echo e($post['discription']); ?></h6>
                <p>creator:<?php echo e($post['creator']); ?></p>
                <p><?php echo e($post['user_id']); ?></p>
            </div>
        </div>
     </div>
     <div class="card">
        <p>comment</p>


        <form method="post" action="/post/show/<?php echo e($post['id']); ?>/<?php echo e($user['id']); ?>">
            <?php echo csrf_field(); ?>
            <div>
                <input type="text" class="form-controll" placeholder="write your comment" name="comment">
            </div>
            <div>
                <input type="text" class="form-controll" placeholder="post_id" name="post_id"  value="<?php echo e($post['id']); ?>"   hidden>
            </div>
            <div>
                <input type="text" class="form-controll" placeholder="user_id" name="user_id" value="<?php echo e($user['id']); ?>"  hidden >
            </div>
            <button type="submit" class="btn btn-success ">comment</button>
            <a href="<?php echo e(route('user.loginForm')); ?>" type="button" class="btn btn-success">Out</a>
        </form>

        

        <div class="container">
            <div class="card">
                <h5>comments</h5>
                <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card">
                        <h4>
                            <?php echo e($comment['user_id']); ?> : comments : <?php echo e($comment['comment']); ?>

                        </h4>
                        <p>
                            <?php echo e($comment['created_at']); ?>

                        </p>
                        
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>







     </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    show
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\blog\resources\views/post/show.blade.php ENDPATH**/ ?>