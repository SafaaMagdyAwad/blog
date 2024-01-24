

<?php $__env->startSection('content'); ?>


<div class="container">
  <div class="card">
    <div class="mb_5">
      <div class="bg_light">
        <div class="card">
          <a href="<?php echo e(route('post.create',$user['id'])); ?>" type="button" class="btn btn-danger">create post</a>
        </div>
        <div class="card">
          <a href="<?php echo e(route('user.show',$user['id'])); ?>" type="button" class="btn btn-dark">my profile</a>
        </div>
      </div>
    </div>
  </div>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">title</th>
      <th scope="col">discription</th>
      <th scope="col">created at</th>
      <th scope="col">...</th>
    </tr>
  </thead>
  <tbody>
    
   
    
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        
      <td ><?php echo e($post['id']); ?></td>
      <td ><?php echo e($post['title']); ?></td>
      <td><?php echo e($post['discription']); ?></td>
      <td><?php echo e($post['created_at']); ?></td>
      <td>
        
        <a href="post/show/<?php echo e($post['id']); ?>/<?php echo e($user['id']); ?>" type="button" class="btn btn-success">view</a>
        
       
      </td>
     
    </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   
  </tbody>
</table>

  <?php $__env->stopSection(); ?>
  <?php $__env->startSection('title'); ?>
    posts
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\blog\resources\views/post/index.blade.php ENDPATH**/ ?>