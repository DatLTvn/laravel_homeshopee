
<?php $__env->startSection('admin_content'); ?>
    <h2>Xây dựng quản lí users</h2>
    <br>
    <!-- Filter  -->
    <form id="frm_filter" action="<?php echo e(URL::to('/all-custom')); ?>" method="GET">
        <?php echo e(csrf_field()); ?>


        <div class="row">
            <div class="col-md-3">
                <label for="validationCustom01" class="form-label">Tên</label>
                <input type="text" value="<?php echo e($user_name); ?>" name="user_name" class="form-control">
            </div>
            <div class="col-md-3">
                <label for="validationCustom01" class="form-label">Nhóm</label>
                <input type="text" value="<?php echo e($user_group); ?>" name="user_group" class="form-control">
            </div>
            <div class="col-md-3">
                <label for="validationCustom01">Địa chỉ</label>
                <input type="text" name="custom_phone" class="form-control">
            </div>
            <div class="col-md-3">
                <label for="validationCustom01" class="form-label ">Trạng thái</label>
                <select name="user_status" aria-label="Default select example" class="form-control">
                    <option selected value="">Trạng thái</option>
                    <option value="1">Đang hoạt động</option>
                    <option value="0">Tạm khóa</option>
                </select>
            </div>
    </form>
    <br>
    </div>
    </div>
    <br>
    <!-- Actions  -->
    <div>
        <a href="<?php echo e(URL::to('/add-users')); ?>">
            <button type="button" style="width:150px" class="btn btn-primary">Thêm mới</button>
        </a>
        <button type="submit" form="frm_filter" class="btn btn-primary mb-3 pull-right">Search</button>
        <a href="<?php echo e(URL::to('/all-users')); ?>" class="btn btn-primary mb-3 mr-3 pull-right">Clear</a>
    </div>
    <br>
    </div>
    <!-- Pagination-->
    <div class="text-center">
        <ul class="pagination justify-content-center">
            <?php echo e($all->render()); ?>

        </ul>
        <style>
            p.center {
                text-align: center;
            }
        </style>
        <p class="center">Hiển thị từ 1~10 trong tổng số 100 users</p>
    </div>
    <div class="col-6">
        <h5>Danh sách người dùng</h5>
    </div>
    <!-- User Table-->
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Họ tên</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nhóm</th>
                    <th scope="col">Trạng thái</th>
                </tr>
            </thead>
            <tbody>
                <?php if($all != null): ?>
                    <?php $__currentLoopData = $all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e($loop->index + 1); ?></th>
                            <td><?php echo e($users->users_name); ?></td>
                            <td><?php echo e($users->users_gmail); ?></td>
                            <td><?php echo e($users->users_group); ?></td>
                            <td><?php echo e($users->users_desc); ?></td>
                            <td>
                                <a href="<?php echo e(URL::to('/edit-users/' . $users->users_id)); ?>" class="active"
                                    ui-toggle-class="">
                                    <i class="fa fa-edit blue-color"></i></a>
                                <a onclick="return confirm(' Bạn có muốn khóa người dùng này?')"
                                    href="<?php echo e(URL::to('/all-users')); ?>" class="active"
                                    ui-toggle-class="">
                                    <i class="fa fa-user-times"></i></a>
                                <a onclick="return confirm(' Ban co muon xoa?')"
                                    href="<?php echo e(URL::to('/delete-users/' . $users->users_id)); ?>" class="active"
                                    ui-toggle-class="">
                                    <i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </tbody>
        </table>

        <div class="text-center">
            <ul class="pagination justify-content-center">
                <?php echo e($all->render()); ?>

            </ul>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel4\resources\views/users/all_users.blade.php ENDPATH**/ ?>