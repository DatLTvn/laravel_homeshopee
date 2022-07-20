
<?php $__env->startSection('admin_content'); ?>

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <h2> Thêm người khách hàng </h2>
                    <?php $__errorArgs = ['msg'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
	                <div class="text-danger" ><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </header>
                <div class="panel-body">
                    <form role="form" action = "<?php echo e(URL::to('/save-custom')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                    <div class="position-center">
                        <form role="form">
                        <div class="form-group">    
                            <br>
                            <label for="exampleInputEmail1">Tên khách hàng:</label>
                            <input type="name" name ="custom_name" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên">
                            <?php $__errorArgs = ['custom_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
				            <div class="text-danger" >- <?php echo e($message); ?></div>
			                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email:</label>
                            <input type="text" name ="custom_email" class="form-control" id="exampleInputEmail1" placeholder="Nhập email">
                            <?php $__errorArgs = ['custom_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
				            <div class="text-danger" >- <?php echo e($message); ?></div>
			                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Địa chỉ:</label>
                            <input type="text" name ="custom_address" class="form-control" id="exampleInputEmail1" placeholder="Nhập địa chỉ">
                            <?php $__errorArgs = ['custom_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
				            <div class="text-danger" >- <?php echo e($message); ?></div>
			                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Điện thoại:</label>
                            <input type="integer" name ="custom_phone" class="form-control" id="exampleInputEmail1"  placeholder="Nhập điện thoại">
                            <?php $__errorArgs = ['custom_phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
				            <div class="text-danger" >- <?php echo e($message); ?></div>
			                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="vehicle1">Trạng thái:</label>
                            <input type="checkbox" id="vehicle1" name="" value="">
                            <br>
                            <br>
                        </div>
                        <button type="reset"  class="btn btn-info">Hủy</button>
                        <button type="submit"  class="btn btn-info">Lưu</button>
                    </form>
                    </div>
                </div>  
            </section>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel4\resources\views/custom/add_custom.blade.php ENDPATH**/ ?>