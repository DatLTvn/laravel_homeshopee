
<?php $__env->startSection('admin_content'); ?>
    <h2>Xây dựng quản lí sản phẩm</h2>
    <br>
    <!-- Filter  -->
    <form id="frm_filter" action="<?php echo e(URL::to('/all-edit-category-product')); ?>" method="GET">
        <?php echo e(csrf_field()); ?>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="validationCustom01">Tên sản phẩm</label>
                    <input type="text" name="category_name" class="form-control">
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationCustom01">Mô tả</label>
                <input type="text" name="category_chucnang" class="form-control">
            </div>
            <div class="col-md-3">
                <label for="validationCustom01">Giá</label>
                <input type="text" name="category_gia" class="form-control">
            </div>
            <div class="col-md-3">
                <label for="validationCustom01">Tình trạng</label>
                <select name="category_tinhtrang" aria-label="Default select example" class="form-control">
                    <option selected value="">Tình trạng</option>
                    <option value="Đang bán">Đang bán</option>
                    <option value="Hết hàng">Hết hàng</option>
                </select>
            </div>
        </div>
    </form>
    <br>
    <!-- Actions  -->
    <div>
        <a href="<?php echo e(URL::to('/add-category-product')); ?>">
            <button type="button" style="width:150px" class="btn btn-primary">Thêm mới</button>
        </a>

        <button type="submit" form="frm_filter" name='key' class="btn btn-primary mb-3 pull-right">Tìm kiếm</button>
        <a href="<?php echo e(URL::to('/all-edit-category-product')); ?>" class="btn btn-primary mb-3 mr-3  pull-right">Xóa tìm</a>
    </div>
    <br>
    <!-- <Pagination-->
    <div class="text-center">
        <ul class="pagination justify-content-center">
            <?php echo e($all_category_product->render()); ?>

        </ul>
        <style>
            p.center {
                text-align: center;
            }

        </style>
        <p class="center">Hiển thị từ 1~10 trong tổng số 100 users</p>
    </div>
    <div class>
        <h4>Danh sách sản phẩm </h4>
    </div>
    
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Mô tả</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Tình trạng</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $all_category_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate_pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($loop->index + 1); ?></th>
                        <td><?php echo e($cate_pro->category_name); ?></td>
                        <td><?php echo e($cate_pro->category_chucnang); ?></td>
                        <td><?php echo e($cate_pro->category_gia); ?></td>
                        <td><?php echo e($cate_pro->category_desc); ?></td>
                        <td>
                            <a href="<?php echo e(URL::to('/edit-category-product/' . $cate_pro->category_id)); ?>"
                                class="active" ui-toggle-class="">
                                <i class="fa fa-edit blue-color"></i></a>
                            <a onclick="return confirm(' Ban co muon xoa?')"
                                href="<?php echo e(URL::to('/delete-category-product/' . $cate_pro->category_id)); ?>"
                                class="active" ui-toggle-class="">
                                <i class="fa fa-times text-danger text"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="text-center">
            <ul class="pagination justify-content-center">
                <?php echo e($all_category_product->render()); ?>

            </ul>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel4\resources\views/admin/all_category_product.blade.php ENDPATH**/ ?>