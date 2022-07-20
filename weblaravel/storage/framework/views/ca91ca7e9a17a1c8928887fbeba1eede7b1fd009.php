
<!DOCTYPE html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href='<?php echo e(asset('public/backend/css/style.css')); ?>' rel='stylesheet' type='text/css' />
<link href="<?php echo e(asset('public/css/style-responsive.css')); ?>" rel="stylesheet"/>
<!-- font CSS -->
<link href='<?php echo e(asset('public/fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic')); ?>' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href='<?php echo e(asset("public/backend/css/font.css")); ?>' type="text/css"/>
<link href="<?php echo e(asset('public/backend/css/font-awesome.css')); ?>" rel="stylesheet"> 
<link rel="stylesheet" href="<?php echo e(asset('public/backend/css/morris.css')); ?>" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="<?php echo e(asset("public/backend/css/monthly.css")); ?>">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="<?php echo e(asset("public/backend/js/jquery2.0.3.min.js")); ?>"></script>
<script src="<?php echo e(asset("public/backend/js/raphael-min.js")); ?>"></script>
<script src="<?php echo e(asset("public/backend/js/morris.js")); ?>"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->

<!--logo end-->
<div class="top-nav clearfix">
    <!--search & user info start-->
   
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
    </ul>
    <!--search & user info end-->
</div>
</header>

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <h2> Đăng kí người dùng </h2>
                    <?php $__errorArgs = ['msg'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
	                <div class="text-danger" ><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </header>
                <h2> Đăng kí người dùng </h2>
                <div class="panel-body">
                    <form role="form" action = "<?php echo e(URL::to('panel/save-users')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                    <div class="position-center">
                        <form role="form">
                        <div class="form-group">    
                            <br>
                            <label for="exampleInputEmail1">Tên:</label>
                            <input type="name" name ="users_name" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên">
                            <?php $__errorArgs = ['users_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
				            <div class="text-danger" >- <?php echo e($message); ?></div>
			                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email:</label>
                            <input type="text" name ="users_gmail" class="form-control" id="exampleInputEmail1" placeholder="Nhập email">
                            <?php $__errorArgs = ['users_gmail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
				            <div class="text-danger" >- <?php echo e($message); ?></div>
			                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mật khẩu:</label>
                            <input type="password" name ="users_password" class="form-control" id="exampleInputEmail1"  placeholder="Nhập mật khẩu">
                            <?php $__errorArgs = ['users_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
				            <div class="text-danger" >- <?php echo e($message); ?></div>
			                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Xác nhận:</label>
                            <input type="password" name ="users_repassword" class="form-control" id="exampleInputEmail1" placeholder="Xác nhận mật khẩu">
                            <?php $__errorArgs = ['users_repassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
				            <div class="text-danger" >- <?php echo e($message); ?></div>
			                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">    
                            <label for="exampleInputEmail1">Số điện thoại:</label>
                            <input type="text" name ="users_phone" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên">
                            <?php $__errorArgs = ['users_phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
				            <div class="text-danger" >- <?php echo e($message); ?></div>
			                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">    
                            <label for="exampleInputEmail1">Địa chỉ:</label>
                            <input type="text" name ="users_address" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên">
                            <?php $__errorArgs = ['users_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
				            <div class="text-danger" >- <?php echo e($message); ?></div>
			                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <button type="reset"  class="btn btn-info">Hủy</button>
                        <button type="submit"  class="btn btn-info">Lưu</button>
                    </form>
                    </div>
                </div>  
            </section>
    </div>
   
    <?php /**PATH C:\xampp\htdocs\relaravel\resources\views/users/sign_in_users.blade.php ENDPATH**/ ?>