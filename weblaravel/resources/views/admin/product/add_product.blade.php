@extends('admin_layout')
@section('admin_content')
<section class="panel">
    <header class="panel-heading">
        <h2> Thêm sản phẩm</h2>
        @error('msg')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </header>
    <br>
    <div class="panel-body">
        <div class="position">
            <form action="" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{-- <div class="row"> --}}
                <div class="row">
                    <div class="col-md-7">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            <input type="text" name="product_name" class="form-control"
                                id="exampleInputEmail1" placeholder="Nhập tên sản phâm">
                            @error('product_name')
                                <div class="text-danger">- {{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá bán</label>
                            <input type="text" name="product_price" class="form-control"
                                id="exampleInputEmail1" placeholder="Nhập giá sản phẩm">
                            @error('product_price')
                                <div class="text-danger">- {{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Số lượng</label>
                            <input type="text" name="product_qty" class="form-control"
                                id="exampleInputEmail1" placeholder="Nhập giá sản phẩm">
                            @error('product_qty')
                                <div class="text-danger">- {{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Danh muc</label>
                            <select name="category_id" id="" class="custom-select custom-select-lg mb-3">
                                @foreach ($category as $item)
                                    <option value="{{ $item->category_id }}">{{ $item->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Trạng thái</label>
                            <select name="product_desc" class="form-control input-sm m-bot15">
                                <option> </option>
                                <option value="Đang bán">Đang bán</option>
                                <option value="Hết hàng">Hết hàng</option>
                            </select>
                            @error('product_desc')
                                <div class="text-danger">- {{ $message }}</div>
                            @enderror
                            <br>
                            {{-- button --}}
                            <button type="submit" class="btn btn-info mr-3">Thêm</button>
                            <a onclick="return confirm('Bạn muốn về trang quản lí users?')"
                                href="{{ URL::to('/all-category-product') }}" class="btn btn-info">Hủy</a>
                        </div>
                    </div>
                    {{-- up load file --}}
                    <div class="col-md-5">
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label"> Hình ảnh: </label>
                            <br>
                            <img width="312" height="312" src="https://imgs.search.brave.com/NwKHu7FaYBKSonSkeT_Yj0dAFauW3SEIqXfoS0XAqF0/rs:fit:512:512:1/g:ce/aHR0cHM6Ly9jZG4w/Lmljb25maW5kZXIu/Y29tL2RhdGEvaWNv/bnMvbGluZS1kb2N1/bWVudHMtYW5kLWZv/bGRlcnMvMTI4L19p/bWFnZV9mb2xkZXIt/NTEyLnBuZw" alt="">
                                <br>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name='product_file' type="file" class="custom-file-input"
                                        id="inputGroupFile04">
                                    <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" id="btnxoa" type="button">Xóa</button>
                                </div>
                            </div>
                        </div>
                        @error('product_file')
                            <div class="text-danger">- {{ $message }}</div>
                        @enderror
                        {{-- </form> --}}
                    </div>
                    {{-- </div> F --}}
                </div>
            </form>
        </div>
    </div>
    <style>
        body{
            background: white;
        }
    </style>
</section>
@endsection