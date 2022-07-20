
<?php $__env->startSection('admin_content'); ?>

<div class="text-center">
    <ul class="pagination justify-content-center">
        
    </ul>
    <style>
        p.center {
            text-align: center;
        }
    </style>
</div>
<div class>
    <h4>Danh sách sản phẩm </h4>
    <a href="<?php echo e(route('admin.add_product')); ?>">
        <button type="button" style="width:150px" class="btn btn-primary">Thêm mới</button>
    </a>
</div>
<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Loại sản phẩm</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Giá</th>
                <th scope="col">Tình trạng</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($loop->index + 1); ?></th>
                <td><?php echo e($item->category_name); ?></td>
                <td><?php echo e($item->product_name); ?></td>
                <td><?php echo e($item->product_qty); ?></td>
                <td><?php echo e($item->product_price); ?></td>
                <td><?php echo e($item->product_desc); ?></td>
                <td>
                    <a href="<?php echo e(URL::to('/edit-category-product/' . $item->category_id)); ?>" class="active"
                        ui-toggle-class="">
                        <i class="fa fa-edit blue-color"></i></a>
                    <a onclick="return confirm(' Ban co muon xoa?')"
                        href="<?php echo e(URL::to('/delete-category-product/' . $item->category_id)); ?>" class="active"
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
            
        </ul>
    </div>
</div>
<style>
    body {
        background: white
    }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\relaravel\resources\views/admin/product/index.blade.php ENDPATH**/ ?>