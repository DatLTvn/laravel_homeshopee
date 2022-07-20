
<?php $__env->startSection('admin_content'); ?>

<div class="row">

    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <h2> Thêm/chỉnh sửa người dùng    </h2>
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form">
                        <div class="form-group">
                            <br>
                            <label for="exampleInputEmail1">Tên:</label>
                            <input type="name" name ="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email:</label>
                            <input type="email" name ="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Nhập email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mật khẩu:</label>
                            <input type="email" name ="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Nhập mật khẩu">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Xác nhận:</label>
                            <input type="email" name ="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Xác nhận mật khẩu">
                        </div>
                       
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nhóm:</label>   
                            <select class="form-control input-sm m-bot15">
                                <option>Thêm Users</option>
                                <option>Chỉnh sửa Users</option>
                               
                            </select>
                            <br>
                        </div>
                        <button type="submit" name="add_category_product" class="btn btn-info">Hủy</button>

                        <button type="submit" name="add_category_product" class="btn btn-info">Lưu</button>
                    </form>
                    </div>

                </div>
            </section>

    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel4\resources\views/admin/add_users.blade.php ENDPATH**/ ?>