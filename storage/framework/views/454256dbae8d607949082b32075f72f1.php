
<?php $__env->startSection('content'); ?>
<a href="<?php echo e(route('blog.create')); ?>" type="button" class="btn btn-danger">create post</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">post id</th>
      <th scope="col">title</th>
      <th scope="col">discription</th>
      <th scope="col">created at</th>
      <th scope="col">...</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td >post id</td>
      <td >title</td>
      <td>discription</td>
      <td>created at</td>
      <td>
        
        <a href="<?php echo e(route('blog.show',1)); ?>" type="button" class="btn btn-success">view</a>
        <a href="<?php echo e(route('blog.edit',1)); ?>" type="button" class="btn btn-danger">edit</a>
        <button type="button" class="btn btn-warning">delete</button>
      </td>
    </tr>
   
  </tbody>
</table>
  <?php $__env->stopSection(); ?>
  <?php $__env->startSection('title'); ?>
    posts
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\blog\resources\views/blog/index.blade.php ENDPATH**/ ?>