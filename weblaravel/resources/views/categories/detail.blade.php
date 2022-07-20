@extends('user_layout')
@section('admin_content')
    <main role="main">
        <div class="card">
            <div class="container-fliud">

                <div class="wrapper">
                    <div class="row">
                        <div class=" col-md-6">
                            <div id="carouselExampleControls" class="carousel slide" style="width: 100%" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100"
                                            src="{{ '../public/upload/' . $cate_detail->product_file }}"
                                            alt="First slide">
                                    </div>
                                    @foreach ($img_detail as $item)
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{ '../public/upload/' . $item->url }}"
                                                alt="First slide">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="details col-md-6">
                            <h3 class="product-title">{{ $cate_detail->product_name }}</h3>
                            <br>

                            <h4 class="card-text">Giá bán: <span>{{ number_format($cate_detail->product_price) }}vnđ</span>
                            </h4>
                            <p class="vote"><strong>100%</strong> hàng <strong>Chất lượng</strong>, đảm bảo
                                <strong>Uy tín</strong>!
                            </p>
                            <form action="{{ route('AddCart') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="soluong">Số lượng đặt mua:</label>
                                    <input type="number" class="form-control" id="soluong" name="product_qty"
                                        min="1" placeholder="Nhập số lượng">
                                </div>
                                <input type="hidden" name="product_name" value="{{ $cate_detail->product_name }}">
                                <input type="hidden" name="product_id" value="{{ $cate_detail->id }}">
                                <input type="hidden" name="product_price" value="{{ $cate_detail->product_price }}">
                                <button type="submit" style="width:180px" class="btn btn-danger mb-4">Add to cart</button>
                            </form>

                            <div class="card">
                                <div class="container-fluid">
                                    
                                    <div class="row">
                                        <div class="col">
                                            <span class="st-icon-delicious"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        </div>

        </div>
    @endsection
