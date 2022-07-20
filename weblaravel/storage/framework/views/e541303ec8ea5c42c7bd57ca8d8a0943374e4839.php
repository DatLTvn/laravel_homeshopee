

<?php $__env->startSection('admin_content'); ?>
<h2>Xây dựng quản lí users</h2>
<!-- Filter  -->
<div class="mb-3">
    <form class="row">
        <!-- don vi chia cot trong bootstrap laf 12 col trong 1 row-->
        <div class="col-3">
          <label for="validationCustom01" class="form-label">Tên</label>
          <input type="text" class="form-control" name="keywordname" id="validationCustom01" value="">
        </div>
        <div class="col-3">
            <label for="validationCustom01" class="form-label">Email</label>
            <input type="text" class="form-control" id="validationCustom01" value="">
        </div>
        <div class="col-3">
            <label for="validationCustom01" class="form-label">Nhóm</label>
            <input type="text" class="form-control" id="validationCustom01" value="">
        </div>
        <div class="col-3">
            <label for="validationCustom01" class="form-label">Trạng thái</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Trạng thái</option>
                <option value="1">Đang hoạt động</option>
                <option value="2">Tạm khóa</option>
              </select>
        </div>


    </form>
</div>

<!-- Actions  -->
<div  class="mb-5">
    <div class="row">
        <div class="col-6">
          <a href="<?php echo e(URL::to('/add-users')); ?>">
            <button type="button" style="width:150px" class="btn btn-primary">Thêm mới</button>
          </a> 
        </div>
        <div class="col-6 text-end">
            
            <div>
                <div class="edit col-sm-4">
                    <form action="<?php echo e(URL::to('/add-users-timkiem')); ?>" method="POST">
                      <?php echo e(csrf_field()); ?>

                    <div class="edit search_box pull-right">
                      <input type="text" name="keyword_search" placeholder="Search"/>
                      <input type="submit" name="submit_search" value="Tìm kiếm" class="btn btn-default btn-sm"/>
                    </div>
                    </form>
                  </div>
            </div>
            
            
        </div>
      </div>
</div>

<!-- Pagination-->
<div class="d-flex justify-content-center">
    <nav aria-label="...">
        <ul class="pagination">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item active" aria-current="page">
            <a class="page-link" href="#">2</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item">
                <li class="page-item"><a class="page-link" href="#">5</a></li>
          <li class="page-item">
            <li class="page-item"><a class="page-link" href="#">6</a></li>
            <li class="page-item">
                <li class="page-item"><a class="page-link" href="#">7</a></li>
          <li class="page-item">
            <li class="page-item"><a class="page-link" href="#">8</a></li>
            <li class="page-item">
                <li class="page-item"><a class="page-link" href="#">9</a></li>
                <li class="page-item"><a class="page-link" href="#">10</a></li>
          <li class="page-item">
            <li class="page-item"><a class="page-link" href="#">11</a></li>
            <li class="page-item">
          <li class="page-item">
            <a class="page-link" href="#">></a>
          </li>
        </ul>
      </nav>

      <div class="col-3">
      <label  for=""> Hiển thị từ 1~10 trong tổng số 100 users</label>
      </div>
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
          <tr>
            <?php $__currentLoopData = $all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <th scope="row">1</th>
            <td><?php echo e($users->users_name); ?></td>
            <td>Admin</td>
            <td>Đang hoạt động</td>
            
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        </tbody>
      </table>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel4\resources\views/admin/all_users.blade.php ENDPATH**/ ?>