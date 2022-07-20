
<?php $__env->startSection('admin_content'); ?>

<div class="row">
    <div class="col-lg-12">     
            <section class="panel">
                <header class="panel-heading">
                    <h2> Chỉnh sửa người dùng    </h2>
                </header>
                <div class="panel-body">
                    <?php $__currentLoopData = $edit_users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $edit_valueusers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="position-center">
                        <form role="form" action = "<?php echo e(URL::to('/update-users/'.$edit_valueusers->users_id)); ?>" method="post">
                            <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <br>
                            <label for="exampleInputEmail1">Tên:</label>
                            <input type="name" value = "<?php echo e($edit_valueusers->users_name); ?>" name ="users_name" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email:</label>
                            <input type="email" value="<?php echo e($edit_valueusers->users_gmail); ?>" name ="users_gmail" class="form-control" id="exampleInputEmail1" placeholder="Nhập email">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nhóm:</label>   
                            <select value = "<?php echo e($edit_valueusers->users_group); ?>" name ="users_group" class="form-control input-sm m-bot15">  
                                <option> Chọn nhóm?</option></option>
                                <option value = 'Editor'>Editor</option>
                                <option value = 'Admin'>Admin</option>
                                <option value = 'Reviewer'>Reviewer</option>
                            </select>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Trạng thái</label>   
                            <select value = "<?php echo e($edit_valueusers->users_desc); ?>" name ="users_desc" class="form-control input-sm m-bot15">
                                <option> Trạng thái gì?</option></option>
                                <option value = "Đang hoạt động">Đang hoạt động</option>
                                <option value = "Tạm khóa">Tạm khóa</option>
                            </select>
                            <br>
                        </div>
                        <button type="submit" name="add_category_product" class="btn btn-info">Hủy</button>
                        <button type="submit" name="add_users" class="btn btn-info">Lưu</button>
                    </form>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </section>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel4\resources\views/users/edit_users.blade.php ENDPATH**/ ?>