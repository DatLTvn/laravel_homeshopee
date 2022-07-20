@extends('user_layout')
@section('admin_content')
    <div class="main">
        <div class="content">
            <div class="content_top">
                <div class="heading">
             
                <div class="clear"></div>
            </div>
            <div class="section group">
            </div>
            <div class="content_bottom">
                <div class="heading">
                    <h3>Feature Products</h3>
                </div>
                <div class="see">
                    <p><a href="#">See all Products</a></p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="section group">
                <div class="row">
                    @foreach ($result as $item)
                    <div class="col-3">
                        <div class="card">
                            <div class="image-bg" style="background-image: url({{ 'public/upload/' . $item->product_file }})"></div>
                            <div class="card-body">
                              <p class="card-title fw-bold">{{ $item->product_name }}</p>
                              <p class="card-text">{{ number_format($item->product_price )}} vnđ</p>
                              <a href="{{ URL::to('/detail/' . $item->id) }}" class="btn btn-danger">Detail Product</a>
                            </div>
                          </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <style>
        .images a img {
            height: 100px !important;
            width: 120px !important;
        }
        .grid_1_of_4 {
            margin: 4px 4px !important;
        }
    </style>
{{-- 
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 order-1 order-lg-2">
                    <div class="product-list">
                        <div class="row">
                            @foreach ($result as $prd)
                                <div class="col-lg-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="pi-pic">
                                            <img src="public/upload/{{ $prd->product_file}}" alt="">
                                            <div class="sale pp-sale">Sale</div>
                                            <div class="icon">
                                                <i class="icon_heart_alt"></i>
                                            </div>
                                            <ul>
                                                <li class="w-icon active"><a href="#"><i
                                                            class="icon_bag_alt"></i></a></li>
                                                <li class="quick-view"><a onclick="AddCart({{$prd->category_id}})"
                                                        href="javascript:">+ Add Cart</a>
                                                </li>
                                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="pi-text">
                                            <div class="catagory-name">Towel</div>
                                            <a href="#">
                                                <h5>{{ $prd->product_name }}</h5>
                                            </a>
                                            <div class="product-price">
                                                {{ number_format($prd->product_price) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section> --}}
@endsection
