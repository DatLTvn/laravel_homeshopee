
<?php $__env->startSection('admin_content'); ?>
    <section class="panel">
        <header class="panel-heading">
            <h2> Thêm sản phẩm</h2>
            <?php $__errorArgs = ['msg'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </header>
        <br>
        <div class="panel-body">
            <div class="position">
                <form action="<?php echo e(route('admin.save_category')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên danh mục</label>
                                <input type="text" name="category_name" class="form-control"
                                    id="exampleInputEmail1" placeholder="Nhập tên danh mục ">
                                <?php $__errorArgs = ['category_product_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-danger">- <?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả danh mục</label>
                                <textarea class="form-control" name="category_chucnang" id="Mô tả danh mục"
                                    placeholder="Mô tả sản phẩm"></textarea>
                                <?php $__errorArgs = ['category_product_chucnang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-danger">- <?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        
                            <div class="form-group">
                                
                                <button type="submit"  class="btn btn-info mr-3">Thêm</button>
                            </div>
                        </div>
                        
                        
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#btnxoa').click(function() {
                $('#inputGroupFile04').val(null);
            })
        })
    </script>
    <style>
        .panel{
            background-color: white !important
        }
    </style>
      <style>
        body {
            background: white
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\relaravel\resources\views/admin/categories/add_category_product.blade.php ENDPATH**/ ?>