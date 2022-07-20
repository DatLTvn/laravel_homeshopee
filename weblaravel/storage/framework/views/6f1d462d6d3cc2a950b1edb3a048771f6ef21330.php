<!DOCTYPE HTML>

<head>
    <title> Home Shoppe Website Template | Home :: Isource</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="<?php echo e(asset('public/web/css/style.css')); ?>" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo e(asset('public/web/css/main.css')); ?>" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo e(asset('public/web/css/slider.css')); ?>" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="<?php echo e(asset('public/web/js/jquery-1.7.2.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/web/js/move-top.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/web/js/easing.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/web/js/startstop-slider.js')); ?>"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Google Font cart -->
    <link href="public/listinfo/https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles cart-->
    <link rel="stylesheet" href="<?php echo e(asset('public/listinfo/css/bootstrap.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('public/listinfo/css/font-awesome.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('public/listinfo/css/themify-icons.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('public/listinfo/css/elegant-icons.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('public/listinfo/css/owl.carousel.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('public/listinfo/css/nice-select.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('public/listinfo/css/jquery-ui.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('public/listinfo/css/slicknav.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('public/listinfo/css/style.css')); ?>" type="text/css">
    <style>
        #change-item-cart table tbody tr td img {
            width: 70px;
        }
    </style>
</head>

<body>
    <div class="wrap">
        <div class="header">
            <div class="headertop_desc">
                <div class="call">
                    <p><span>Need help?</span> call us <span class="number">1-22-3456789</span></span></p>
                </div>
                <div class="account_desc">
                    <ul>
                        <?php if(Session::get('user')): ?>
                            <li><a href="<?php echo e(route('logout')); ?>">Hello <?php echo e(Session::get('user')->users_name); ?></a>
                            </li>
                        <?php else: ?>
                            <li><a href="<?php echo e(URL::to('/sign-in-users')); ?>">Register</a></li>
                            <li><a href="<?php echo e(URL::to('/login-users')); ?>">Login</a></li>
                        <?php endif; ?>

                        <li><a href="<?php echo e(route('cart')); ?>">View Cart</a></li>
                        <li><a href="#">Delivery</a></li>
                        <li><a href="#">My Account</a></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            <div class="header_top">
                <div class="logo">
                    <a href="<?php echo e(URL::to('/')); ?>"><img src="<?php echo e(asset('public/web/images/logo.png')); ?>"
                            alt="" /></a>
                </div>
                <div class="container">
                    <div class="inner-header">
                        <div class="row">
                            <div class="col-lg-2 col-md-2">
                                <div class="logo">
                                    <a href="#">
                                        <img src="img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    function DropDown(el) {
                        this.dd = el;
                        this.initEvents();
                    }
                    DropDown.prototype = {
                        initEvents: function() {
                            var obj = this;

                            obj.dd.on('click', function(event) {
                                $(this).toggleClass('active');
                                event.stopPropagation();
                            });
                        }
                    }
                    $(function() {
                        var dd = new DropDown($('#dd'));
                        $(document).click(function() {
                            // all dropdowns
                            $('.wrapper-dropdown-2').removeClass('active');
                        });
                    });
                </script>
                <div class="clear"></div>
            </div>



            <div class="header_bottom">
                <div class="menu">
                    <ul style="margin-bottom: 0;">
                        <li class="active"><a href="<?php echo e(URL::to('/')); ?>">Home</a></li>
                        <li><a href="<?php echo e(URL::to('/web-about')); ?>">About</a></li>
                        <li><a href="<?php echo e(URL::to('/web-delivery')); ?>">Delivery</a></li>
                        <li><a href="<?php echo e(URL::to('/web-news')); ?>">News</a></li>
                        <li><a href="<?php echo e(URL::to('/web-contact')); ?>">Contact</a></li>
                        <div class="clear"></div>
                    </ul>
                </div>

                <div class="search_box">
                    <form action="<?php echo e(URL::to('/search-product')); ?>">
                        <input type="text" name="product_name">
                        <input type="submit" value="">
                    </form>
                </div>
                <div class="clear"></div>
                <div class="header_bottom_left">
                    <div class="categories">
                        <ul>
                            <h3>Categories</h3>
                            <?php $__currentLoopData = $categoryGlobal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a
                                        href="<?php echo e(route('category', $item->category_slug)); ?>"><?php echo e($item->category_name); ?></a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
                <div class="header_bottom_right">
                    <div class="slider">
                        <div id="slider">
                            <div id="mover">
                                <div id="slide-1" class="slide">
                                    <div class="slider-img">
                                        <a href="preview.html"><img
                                                src="<?php echo e(asset('public/web/images/slide-1-image.png')); ?>"
                                                alt="learn more" /></a>
                                    </div>
                                    <div class="slider-text">
                                        <h1>Clearance<br><span>SALE</span></h1>
                                        <h2>UPTo 20% OFF</h2>
                                        <div class="features_list">
                                            <h4>Get to Know More About Our Memorable Services Lorem Ipsum is simply
                                                dummy text</h4>
                                        </div>
                                        <a href="preview.html" class="button">Shop Now</a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="slide">
                                    <div class="slider-text">
                                        <h1>Clearance<br><span>SALE</span></h1>
                                        <h2>UPTo 40% OFF</h2>
                                        <div class="features_list">
                                            <h4>Get to Know More About Our Memorable Services</h4>
                                        </div>
                                        <a href="preview.html" class="button">Shop Now</a>
                                    </div>
                                    <div class="slider-img">
                                        <a href="preview.html"><img
                                                src="<?php echo e(asset('public/web/images/slide-3-image.jpg')); ?>"
                                                alt="learn more" /></a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="slide">
                                    <div class="slider-img">
                                        <a href="preview.html"><img
                                                src="<?php echo e(asset('public/web/images/slide-2-image.jpg')); ?>"
                                                alt="learn more" /></a>
                                    </div>
                                    <div class="slider-text">
                                        <h1>Clearance<br><span>SALE</span></h1>
                                        <h2>UPTo 10% OFF</h2>
                                        <div class="features_list">
                                            <h4>Get to Know More About Our Memorable Services Lorem Ipsum is simply
                                                dummy text</h4>
                                        </div>
                                        <a href="preview.html" class="button">Shop Now</a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
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
                                <li><a href="#" target="_blank"><img
                                            src="<?php echo e(asset('public/smartphone/images/facebook.png')); ?>"
                                            alt="" /></a></li>
                                <li><a href="#" target="_blank"><img
                                            src="<?php echo e(asset('public/smartphone/images/twitter.png')); ?>"
                                            alt="" /></a></li>
                                <li><a href="#" target="_blank"><img
                                            src="<?php echo e(asset('public/smartphone/images/skype.png')); ?>"
                                            alt="" />
                                    </a></li>
                                <li><a href="#" target="_blank"> <img
                                            src="<?php echo e(asset('public/smartphone/images/dribbble.png')); ?>"
                                            alt="" /></a></li>
                                <li><a href="#" target="_blank"> <img
                                            src="<?php echo e(asset('public/smartphone/images/linkedin.png')); ?>"
                                            alt="" /></a></li>
                                <div class="clear"></div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy_right">
                <p>Company Name © All rights Reseverd | Design by <a href="http://isource.vn">Isource</a> </p>
            </div>
        </div>
        
        
        <!-- Js Plugins -->
        <script src="<?php echo e(asset('public/listinfo/js/jquery-3.3.1.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/listinfo/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/listinfo/js/jquery-ui.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/listinfo/js/jquery.countdown.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/listinfo/js/jquery.nice-select.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/listinfo/js/jquery.zoom.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/listinfo/js/jquery.dd.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/listinfo/js/jquery.slicknav.js')); ?>"></script>
        <script src="<?php echo e(asset('public/listinfo/js/owl.carousel.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/listinfo/js/main.js')); ?>"></script>

        <!-- JavaScript -->
        <script src="public/listinfo//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

        <!-- CSS -->
        <link rel="stylesheet"
            href="<?php echo e(asset('public/listinfo//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css')); ?>" />
        <!-- Default theme -->
        <link rel="stylesheet"
            href="<?php echo e(asset('public/listinfo//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css')); ?>" />
        <!-- Semantic UI theme -->
        <link rel="stylesheet"
            href="<?php echo e(asset('public/listinfo//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css')); ?>" />
        <!-- Bootstrap theme -->
        <link rel="stylesheet"
            href="<?php echo e(asset('public/listinfo//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css')); ?>" />
        <!-- Javacript -->
        <script>
            function AddCart(id) {
                $.ajax({
                    url: 'add-cart/' + id,
                    type: 'GET',
                }).done(function(response) {
                    $("#change-item-cart").empty();
                    $("#change-item-cart").html(response);
                    alertify.success('Đã thêm mới sản phẩm');
                });
            }

            $("#change-item-cart").on("click", ".si-close i", function() {
                $.ajax({
                    url: 'delete-item-card/' + $(this).data('id'),
                    type: 'GET',
                }).done(function(response) {
                    $("#change-item-cart").empty();
                    $("#change-item-cart").html(response);
                    alertify.error('Đã xóa sản phẩm thành công');
                });
            });
        </script>


        <?php
        $error = Session::get('error');
        if ($error) {
            echo "<script type='text/javascript'>alert('$error');</script>";
            Session::forget('error');
        }
        ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\relaravel\resources\views/user_layout.blade.php ENDPATH**/ ?>