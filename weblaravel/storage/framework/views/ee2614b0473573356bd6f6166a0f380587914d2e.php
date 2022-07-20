
<?php $__env->startSection('admin_content'); ?>
<h3>Bạn muốn thêm thông tin sản phẩm nào?
</h3>
<div>
    <a href="<?php echo e(URL::to('/add-accessories')); ?>" class="btn btn-primary mr-3  pull-right">Accessories</a>
    <a href="<?php echo e(URL::to('/add-laptop')); ?>" class="btn btn-primary mr-3  pull-right">Laptop</a>
    <a href="<?php echo e(URL::to('/add-desktop')); ?>" class="btn btn-primary mr-3  pull-right">Desktop</a>
    <a href="<?php echo e(URL::to('/add-mobile')); ?>" class="btn btn-primary mr-3  pull-right">Mobile</a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\relaravel\resources\views/categories/choose.blade.php ENDPATH**/ ?>