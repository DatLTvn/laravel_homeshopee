
<?php $__env->startSection('admin_content'); ?>

<div class="row">
    <div class="col-lg-12">     
            <section class="panel">
                <header class="panel-heading">
                    <h2> Chỉnh sửa thông tin khách hàng</h2>
                </header>
                <div class="panel-body">
                    <?php $__currentLoopData = $edit_custom; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $edit_valuecustom): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="position-center">
                        <form role="form" action = "<?php echo e(URL::to('/update-custom/'.$edit_valuecustom->custom_id)); ?>" method="post">
                            <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <br>
                            <label for="exampleInputEmail1">Tên:</label>
                            <input type="name" value = "<?php echo e($edit_valuecustom->custom_name); ?>" name ="custom_name" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email:</label>
                            <input type="email" value="<?php echo e($edit_valuecustom->custom_email); ?>" name ="custom_email" class="form-control" id="exampleInputEmail1" placeholder="Nhập email">
                            <br>
                        </div>
                        <div class="form-group">
                            <br>
                            <label for="exampleInputEmail1">Địa chỉ:</label>
                            <input type="name" value = "<?php echo e($edit_valuecustom->custom_address); ?>" name ="custom_address" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Điện thoại:</label>
                            <input type="integer" value="<?php echo e($edit_valuecustom->custom_phone); ?>" name ="custom_phone" class="form-control" id="exampleInputEmail1" placeholder="Nhập email">
                            <br>
                        </div>
                        <button type="reset" name="add_custom" class="btn btn-info">Hủy</button>
                        <button type="submit" name="add_custom" class="btn btn-info">Lưu</button>
                    </form>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </section>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel4\resources\views/custom/edit_custom.blade.php ENDPATH**/ ?>