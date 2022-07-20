<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home shopee | Template</title>

    <!-- Google Font -->
    <link href="public/listinfo/https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="public/listinfo/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="public/listinfo/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="public/listinfo/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="public/listinfo/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="public/listinfo/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="public/listinfo/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="public/listinfo/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="public/listinfo/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="public/listinfo/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>


    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="{{ URL::to('/')}}"><i class="fa fa-home"></i> Home</a>
                        {{-- <a href="./shop.html">Shop</a>
                        <span>Shopping Cart</span> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Hình ảnh</th>
                                    <th class="p-name">Tên sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Tổng tiền</th>
                                    <th>Xóa</th>
                                    <th>Cập nhật</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cart as $cart)
                                    <tr>
                                        <td class="cart-pic first-row"><img
                                                src="{{ 'public/upload/' . $cart->product_file }}" alt=""
                                                width="100" height="100" /></td>
                                        <td class="cart-title first-row">
                                            <h5>{{ $cart->product_name }}</h5>
                                        </td>
                                        <td class="p-price first-row">
                                            {{ number_format($cart->product_price, 0, ',', '.') . ' Vnd' }}</td>
                                        <td class="qua-col first-row">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <input type="text" value="{{ $cart->quantity }}">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="total-price first-row">
                                            {{ number_format($cart->product_price * $cart->quantity, 0, ',', '.') . ' Vnd' }}
                                        </td>
                                        <td class="close-td first-row"><a href="{{route('deleteCart',$cart->id)}}"><i class="ti-close"></i></a>
                                        </td>
                                        <td class="close-td first-row"><a href=""><i class="ti-save"></i></a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 offset-lg-8">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="subtotal">Subtotal
                                        <span>{{ number_format($totalCart), 0, ',', '.' }}</span>
                                    </li>
                                    <li class="cart-total">Total
                                        <span>{{ number_format($totalCart), 0, ',', '.' }}</span>
                                    </li>
                                </ul>
                                <a href="{{route('checkout')}}" class="proceed-btn">PROCEED TO CHECK OUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i
                                class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <div class="payment-pic">
                            <img src="listinfo/img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="public/listinfo/js/jquery-3.3.1.min.js"></script>
    <script src="public/listinfo/js/bootstrap.min.js"></script>
    <script src="public/listinfo/js/jquery-ui.min.js"></script>
    <script src="public/listinfo/js/jquery.countdown.min.js"></script>
    <script src="public/listinfo/js/jquery.nice-select.min.js"></script>
    <script src="public/listinfo/js/jquery.zoom.min.js"></script>
    <script src="public/listinfo/js/jquery.dd.min.js"></script>
    <script src="public/listinfo/js/jquery.slicknav.js"></script>
    <script src="public/listinfo/js/owl.carousel.min.js"></script>
    <script src="public/listinfo/js/main.js"></script>
</body>

</html>
