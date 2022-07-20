
<!DOCTYPE HTML>
<head>
<title>Home Shoppe for Iphone, Android and Smartphone Website Templates | Home :: Isource</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="Home Shoppe Iphone web template, Andriod web template, Smartphone web template,  webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<link href="<?php echo e(asset('public/smartphone/css/style.css')); ?>" rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo e(asset('public/smartphone/css/slider.css')); ?>" rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo e(asset('public/smartphone/css/menu.css')); ?>" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="<?php echo e(asset('public/smartphone/js/jquery-1.7.2.min.js')); ?>"></script> 
<script type="text/javascript" src="<?php echo e(asset('public/smartphone/js/startstop-slider.js')); ?>"></script>
</head>
<body>
  <div class="wrap">
	<div class="header">
	 <div class="header_bottom">
		<div class="logo">
				<a href="<?php echo e(URL::to('/index-sp')); ?>"><img src="<?php echo e(asset('public/smartphone/images/logo.png')); ?>" alt="" /></a>
			</div>
	        <nav class="nav">
	            <ul class="nav-list">
	                <li class="nav-item"><a href="<?php echo e(URL::to('/index-sp')); ?>">Home</a></li>
	                <li class="nav-item"><a href="<?php echo e(URL::to('/about-sp')); ?>">About</a></li>
	                <li class="nav-item"><a href="<?php echo e(URL::to('/delivery-sp')); ?>">Delivery</a></li>
	                <li class="nav-item has-inner">
	                    <a href="#">Categories</a>
	                    <ul class="nav-inner">
	                          <li><a href="#">Mobile Phones</a></li>
						      <li><a href="#">Desktop</a></li>
						      <li><a href="#">Laptop</a></li>
						      <li><a href="#">Accessories</a></li>
						      <li><a href="#">Software</a></li>
						       <li><a href="#">Sports &amp; Fitness</a></li>
						       <li><a href="#">Footwear</a></li>
						       <li><a href="#">Jewellery</a></li>
						       <li><a href="#">Clothing</a></li>
						       <li><a href="#">Home Decor &amp; Kitchen</a></li>
						       <li><a href="#">Beauty &amp; Healthcare</a></li>
						       <li><a href="#">Toys, Kids &amp; Babies</a></li>
	                    </ul>
	                </li>
	                <li class="nav-item"><a href="<?php echo e(URL::to('/new-sp')); ?>">News</a></li>
	                <li class="nav-item"><a href="<?php echo e(URL::to('/contact-sp')); ?>">Contact</a></li>
	            </ul>
	        </nav>
	        <div class="clear"> </div>
	        <script type="text/javascript" src="<?php echo e(asset('public/smartphone/js/responsive.menu.js')); ?>"></script>
         </div>	  
         <div class="header_top">
			  <div class="cart">
			  	   <h3>Welcome to our Online Store! </h3>
			  	     <p><span>Cart:</span><div id="dd" class="wrapper-dropdown-2"> 0 item(s) - $0.00
			  	   	<ul class="dropdown">
							<li>you have no items in your Shopping cart</li>
					</ul></div></p>
			  </div>
			  <script type="text/javascript">
			function DropDown(el) {
				this.dd = el;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						event.stopPropagation();
					});	
				}
			}

			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-2').removeClass('active');
				});

			});

		</script>
	 <div class="clear"></div>
  </div>
  

   <section id="main-content">
    <section class="wrapper">
        <?php echo $__env->yieldContent('admin_content'); ?>
    </section>

    <div class="footer">
		<div class="wrap">	
		<div class="section group">
			   <div class="col_1_of_4 span_1_of_4">
					   <h4>Information</h4>
					   <ul>
					   <li><a href="about.html">About Us</a></li>
					   <li><a href="contact.html">Customer Service</a></li>
					   <li><a href="#">Advanced Search</a></li>
					   <li><a href="delivery.html">Orders and Returns</a></li>
					   <li><a href="contact.html">Contact Us</a></li>
					   </ul>
				   </div>
			   <div class="col_1_of_4 span_1_of_4">
				   <h4>Why buy from us</h4>
					   <ul>
					   <li><a href="about.html">About Us</a></li>
					   <li><a href="contact.html">Customer Service</a></li>
					   <li><a href="#">Privacy Policy</a></li>
					   <li><a href="contact.html">Site Map</a></li>
					   <li><a href="#">Search Terms</a></li>
					   </ul>
			   </div>
			   <div class="col_1_of_4 span_1_of_4">
				   <h4>My account</h4>
					   <ul>
						   <li><a href="contact.html">Sign In</a></li>
						   <li><a href="<?php echo e(URL::to('/index-sp')); ?>">View Cart</a></li>
						   <li><a href="#">My Wishlist</a></li>
						   <li><a href="#">Track My Order</a></li>
						   <li><a href="contact.html">Help</a></li>
					   </ul>
			   </div>
			   <div class="col_1_of_4 span_1_of_4">
				   <h4>Contact</h4>
					   <ul>
						   <li><span>+91-123-456789</span></li>
						   <li><span>+00-123-000000</span></li>
					   </ul>
					   <div class="social-icons">
						   <h4>Follow Us</h4>
								<ul>
								 <li><a href="#" target="_blank"><img src="<?php echo e(asset('public/smartphone/images/facebook.png')); ?>" alt="" /></a></li>
								 <li><a href="#" target="_blank"><img src="<?php echo e(asset('public/smartphone/images/twitter.png')); ?>" alt="" /></a></li>
								 <li><a href="#" target="_blank"><img src="<?php echo e(asset('public/smartphone/images/skype.png')); ?>" alt="" /> </a></li>
								 <li><a href="#" target="_blank"> <img src="<?php echo e(asset('public/smartphone/images/dribbble.png')); ?>" alt="" /></a></li>
								 <li><a href="#" target="_blank"> <img src="<?php echo e(asset('public/smartphone/images/linkedin.png')); ?>" alt="" /></a></li>
								 <div class="clear"></div>
							</ul>
						   </div>
			   </div>
		   </div>			
	   </div>
	   <div class="copy_right">
			   <p>Company Name © All rights Reseverd | Design by  <a href="http://isource.vn">Isource</a> </p>
		  </div>
   </div>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\relaravel\resources\views/layout.blade.php ENDPATH**/ ?>