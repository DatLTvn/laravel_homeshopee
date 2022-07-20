
<?php $__env->startSection('admin_content'); ?>

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <h2> Thêm người dùng </h2>
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
                    <form role="form" action = "<?php echo e(URL::to('/save-users')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                    <div class="position-center">
                        <form role="form">
                        <div class="form-group">    
                            <br>
                            <label for="exampleInputEmail1">Tên:</label>
                            <input type="name" name ="users_name" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên">
                            <?php $__errorArgs = ['users_name'];
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
                            <input type="text" name ="users_gmail" class="form-control" id="exampleInputEmail1" placeholder="Nhập email">
                            <?php $__errorArgs = ['users_gmail'];
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
                            <label for="exampleInputEmail1">Mật khẩu:</label>
                            <input type="password" name ="users_password" class="form-control" id="exampleInputEmail1"  placeholder="Nhập mật khẩu">
                            <?php $__errorArgs = ['users_password'];
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
                            <label for="exampleInputEmail1">Xác nhận:</label>
                            <input type="password" name ="users_repassword" class="form-control" id="exampleInputEmail1" placeholder="Xác nhận mật khẩu">
                            <?php $__errorArgs = ['users_repassword'];
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
                            <label for="exampleInputPassword1">Nhóm:</label>   
                            <select name ="users_group" class="form-control input-sm m-bot15">
                                <option>Editor</option>
                                <option>Admin</option>
                                <option>Reviewer</option>
                            </select>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Trạng thái</label>   
                            <select name ="users_desc" class="form-control input-sm m-bot15">
                                <option >Trạng thái??</option>
                                <option value="Đang hoạt động">Đang hoạt động</option>
                                <option value= "Tạm khóa">Tạm khóa</option>
                            </select>
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
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel4\resources\views/users/add_users.blade.php ENDPATH**/ ?>