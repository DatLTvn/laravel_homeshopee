
<?php $__env->startSection('admin_content'); ?>
    <div class="main">
        <div class="content">
            <div class="content_top">
                <div class="heading">
                    <h3>New Products</h3>
                </div>
                <div class="see">
                    <p><a href="#">See all Products</a></p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="section group">
                <div class="row">
                 <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <div class="col-3">
                    <div class="card">
                        <div class="image-bg" style="background-image: url(<?php echo e('../public/upload/' . $item->product_file); ?>)"></div>
                        
                        <div class="card-body">
                          <p class="card-title fw-bold"><?php echo e($item->product_name); ?></p>
                          <p class="card-text"><?php echo e(number_format($item->product_price )); ?> vnđ</p>
                          <a href="<?php echo e(URL::to('/detail/' . $item->id)); ?>" class="btn btn-danger">Add to cart</a>
                        </div>
                      </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
            </div>
            <div class="content_bottom">
                <div class="heading">
                    <h3>Feature Products</h3>
                </div>
                <div class="see">
                    <p><a href="#">See all Products</a></p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="section group">
            </div>
        </div>
    </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\relaravel\resources\views/categories/index.blade.php ENDPATH**/ ?>