
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
                <form action="<?php echo e(URL::to('/save-mobile')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên danh mục</label>
                                <input type="text" name="mobile_name" class="form-control"
                                    id="exampleInputEmail1" placeholder="Nhập tên sản phâm">
                                <?php $__errorArgs = ['mobile_name'];
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
                                <textarea class="form-control" name="mobile_chucnang" id="Mô tả danh mục"
                                    placeholder="Mô tả sản phẩm"></textarea>
                                <?php $__errorArgs = ['moblie_chucnang'];
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
                                <label for="exampleInputEmail1">Giá bán</label>
                                <input type="text" name="mobile_gia" class="form-control"
                                    id="exampleInputEmail1" placeholder="Nhập giá sản phẩm">
                                <?php $__errorArgs = ['mobile_gia'];
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
                                <label for="exampleInputPassword1">Trạng thái</label>
                                <select name="mobile_desc" class="form-control input-sm m-bot15">
                                    <option> </option>
                                    <option value="Đang bán">Ngưng bán</option>
                                    <option value="Đang bán">Đang bán</option>
                                    <option value="Hết hàng">Hết hàng</option>
                                </select>
                                <?php $__errorArgs = ['mobile_desc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-danger">- <?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <br>
                                
                                <button type="submit" name="add_mobile" class="btn btn-info mr-3">Thêm</button>
                                <a onclick="return confirm('Bạn muốn về trang quản lí users?')"
                                    href="<?php echo e(URL::to('/all-category-product')); ?>" class="btn btn-info">Hủy</a>
                            </div>
                        </div>
                        
                        <div class="col-md-5">
                            <div class="mb-3">
                                <label for="formFileMultiple" class="form-label"> Hình ảnh: </label>
                                <br>
                                <img width="312" height="312" src="https://imgs.search.brave.com/NwKHu7FaYBKSonSkeT_Yj0dAFauW3SEIqXfoS0XAqF0/rs:fit:512:512:1/g:ce/aHR0cHM6Ly9jZG4w/Lmljb25maW5kZXIu/Y29tL2RhdGEvaWNv/bnMvbGluZS1kb2N1/bWVudHMtYW5kLWZv/bGRlcnMvMTI4L19p/bWFnZV9mb2xkZXIt/NTEyLnBuZw" alt="">
                                    <br>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input name='mobile_file' type="file" class="custom-file-input"
                                            id="inputGroupFile04">
                                        <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" id="btnxoa" type="button">Xóa</button>
                                    </div>
                                </div>
                            </div>
                            <?php $__errorArgs = ['mobile_file'];
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

<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\relaravel\resources\views/ad_category/add_mobile.blade.php ENDPATH**/ ?>