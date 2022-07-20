@extends('admin_layout')
@section('admin_content')

<div class="text-center">
    <ul class="pagination justify-content-center">
        {{-- {{ $all_category_product->render() }} --}}
    </ul>
    <style>
        p.center {
            text-align: center;
        }
    </style>
</div>
<div class>
    <h4>Danh sách sản phẩm </h4>
    <a href="{{route('admin.add_product')}}">
        <button type="button" style="width:150px" class="btn btn-primary">Thêm mới</button>
    </a>
</div>
<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Loại sản phẩm</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Giá</th>
                <th scope="col">Tình trạng</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $key => $item)
            <tr>
                <th scope="row">{{ $loop->index + 1 }}</th>
                <td>{{$item->category_name}}</td>
                <td>{{ $item->product_name }}</td>
                <td>{{ $item->product_qty}}</td>
                <td>{{ $item->product_price}}</td>
                <td>{{ $item->product_desc}}</td>
                <td>
                    <a href="{{ URL::to('/edit-category-product/' . $item->category_id) }}" class="active"
                        ui-toggle-class="">
                        <i class="fa fa-edit blue-color"></i></a>
                    <a onclick="return confirm(' Ban co muon xoa?')"
                        href="{{ URL::to('/delete-category-product/' . $item->category_id) }}" class="active"
                        ui-toggle-class="">
                        <i class="fa fa-times text-danger text"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="text-center">
        <ul class="pagination justify-content-center">
            {{-- {{ $all_category_product->render() }} --}}
        </ul>
    </div>
</div>
<style>
    body {
        background: white
    }
</style>
@stop