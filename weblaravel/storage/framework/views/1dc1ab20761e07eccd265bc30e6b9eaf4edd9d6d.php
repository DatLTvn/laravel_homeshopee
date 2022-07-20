
<?php $__env->startSection('admin_content'); ?>
    <h2>Xây dựng quản lí khách hàng</h2>
    <br>
    <!-- Filter  -->
    <form id="frm_filter" action="<?php echo e(URL::to('/all-custom')); ?>" method="GET">
        <?php echo e(csrf_field()); ?>


        <div class="row">
            <div class="col-md-3">
                <label for="validationCustom01">Tên</label>
                <input type="text" name="custom_name" class="form-control">
            </div>
            <div class="col-md-3">
                <label for="validationCustom01">Email</label>
                <input type="text" name="custom_email" class="form-control">
            </div>
            <div class="col-md-3">
                <label for="validationCustom01">Địa chỉ</label>
                <input type="text" name="custom_phone" class="form-control">
            </div>
            <div class="col-md-3">
                <label for="validationCustom01" class="form-label">Trạng thái</label>
                <select aria-label="Default select example" class="form-control">
                    <option selected value="">Trạng thái</option>
                    <option value="1">Đang hoạt động</option>
                    <option value="0">Tạm khóa</option>
                </select>
            </div>
        </div>
    </form>
    <br>
    <br>
    <!-- Actions  -->
    <div>
        <a href="<?php echo e(URL::to('/add-custom')); ?>">
            <button type="button" style="width:150px" class="btn btn-primary">Thêm mới</button>
        </a>
        <button style="width:150px" class="btn btn-success">Import CSV</button>
        <button style="width:100px" class="btn btn-success">Export</button>

        <button type="submit" form="frm_filter" class="btn btn-primary mb-3  pull-right">Tìm kiếm</button>
        <a href="<?php echo e(URL::to('/all-custom')); ?>" class="btn btn-success mb-3 mr-3 pull-right "> Xóa tìm</a>
    </div>
    <br>
    <!-- Pagination-->
    <div class="text-center">
        <ul class="pagination justify-content-center">
            <?php echo e($all_custom->render()); ?>

        </ul>
    </div>
    <style>
        p.center {
            text-align: center;
        }
    </style>
    <p class="center">Hiển thị từ 1~10 trong tổng số 100 users</p>
    </div>
    <div class="col-6">
        <h4>Danh sách khách hàng</h4>
    </div>
    <!-- User Table-->
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Họ tên</th>
                    <th scope="col">Email</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Điện thoại</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $all_custom; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $custom): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($loop->index + 1); ?></th>
                        <td><?php echo e($custom->custom_name); ?></td>
                        <td><?php echo e($custom->custom_email); ?></td>
                        <td><?php echo e($custom->custom_address); ?></td>
                        <td><?php echo e($custom->custom_phone); ?></td>
                        <td>
                            <a href="<?php echo e(URL::to('/edit-custom/' . $custom->custom_id)); ?>" class="active"
                                ui-toggle-class="">
                                <i class="fa fa-edit blue-color"></i></a>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="text-center">
            <ul class="pagination justify-content-center">
                <?php echo e($all_custom->render()); ?>

            </ul>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel4\resources\views/custom/all_custom.blade.php ENDPATH**/ ?>