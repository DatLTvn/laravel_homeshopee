@extends('user_layout')
@section('admin_content')
    <div class="main">
        <div class="content">
            <div class="content_top">
                <div class="heading">
                    <h3>New Products</h3>
                </div>
                <div class="see">
                    <p><a href="#">See all Products</a></p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="section group">
                <div class="row">
                 @foreach ($products as $item)
                 <div class="col-3">
                    <div class="card">
                        <div class="image-bg" style="background-image: url({{ '../public/upload/' . $item->product_file }})"></div>
                        {{-- <img src="{{ 'public/upload/' . $item->product_file }}" class="card-img-top" alt="..."> --}}
                        <div class="card-body">
                          <p class="card-title fw-bold">{{ $item->product_name }}</p>
                          <p class="card-text">{{number_format($item->product_price )}} vnđ</p>
                          <a href="{{ URL::to('/detail/' . $item->id) }}" class="btn btn-danger">Add to cart</a>
                        </div>
                      </div>
                </div>
                @endforeach 
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
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
