
<!DOCTYPE html>
<head>
<title>Trang quản lí Admin Web</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- Custom CSS -->
<link href="<?php echo e(asset('public/backend/css/style.css')); ?>" rel='stylesheet' type='text/css' />
<link href="<?php echo e(asset('public/backend/css/style-responsive.css')); ?>" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?php echo e(asset('public/backend/css/font.css')); ?>" type="text/css"/>
<link href="<?php echo e(asset('public/backendcss/font-awesome.css')); ?>" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<div class="log-w3">
<div class="w3layouts-main">
	<h2>Đăng nhập</h2>
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
		<form action="<?php echo e(URL::to('/admin-dashboard')); ?>" method="post">
			<?php echo e(csrf_field()); ?>

			<input type="text" class="ggg" name="admin_email" placeholder="Điền email" required="">  
			<?php $__errorArgs = ['admin_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
				<div class="text-danger" >- <?php echo e($message); ?></div>
			<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
			<input type="password" class="ggg" name="admin_password" placeholder="Điền mật khẩu" required="">
			<?php $__errorArgs = ['admin_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
				<div class="text-danger" >- <?php echo e($message); ?></div>
			<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
			<span><input type="checkbox" />Nhớ đăng nhập</span>
			<h6><a href="#">Quên mật khẩu</a></h6>
				<div class="clearfix"></div>
				<input type="submit" value="Sign In" name="login">
		</form>
		
</div>
</div>
<script src="<?php echo e(asset('public/backend/js/bootstrap.js')); ?>"></script>
<script src="<?php echo e(asset('public/backend/js/jquery.dcjqaccordion.2.7.js')); ?>"></script>
<script src="<?php echo e(asset('public/backend/js/scripts.js')); ?>"></script>
<script src="<?php echo e(asset('public/backend/js/jquery.slimscroll.js')); ?>"></script>
<script src="<?php echo e(asset('public/backend/js/jquery.nicescroll.js')); ?>"></script>
<script src="<?php echo e(asset('public/backend/js/jquery.scrollTo.js')); ?>"></script>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\laravel4\resources\views/admin_login.blade.php ENDPATH**/ ?>