
<?php $__env->startSection('admin_content'); ?>
    <h2>Xây dựng quản lí sản phẩm</h2>
    <br>
    <div>
        <a href="<?php echo e(route('admin.add_category')); ?>">
            <button type="button" style="width:150px" class="btn btn-primary">Thêm mới</button>
        </a>
    </div>
    <!-- <Pagination-->
    <div class="text-center">
        <ul class="pagination justify-content-center">
            <?php echo e($category->render()); ?>

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
                    
                    
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cate_pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($loop->index + 1); ?></th>
                        <td><?php echo e($cate_pro->category_name); ?></td>
                        <td><?php echo e($cate_pro->category_chucnang); ?></td>
                        <td>
                            <a href="<?php echo e(URL::to('/edit-category-product/' . $cate_pro->category_id)); ?>" class="active"
                                ui-toggle-class="">
                                <i class="fa fa-edit blue-color"></i></a>
                            <a onclick="return confirm(' Ban co muon xoa?')"
                                href="<?php echo e(URL::to('/delete-category-product/' . $cate_pro->category_id)); ?>" class="active"
                                ui-toggle-class="">
                                <i class="fa fa-times text-danger text"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="text-center">
            <ul class="pagination justify-content-center">
                <?php echo e($category->render()); ?>

            </ul>
        </div>
    </div>
    <style>
        body {
            background: white
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\relaravel\resources\views/admin/categories/all_category_product.blade.php ENDPATH**/ ?>