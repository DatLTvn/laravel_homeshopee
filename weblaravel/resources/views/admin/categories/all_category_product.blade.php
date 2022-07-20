@extends('admin_layout')
@section('admin_content')
    <h2>Xây dựng quản lí sản phẩm</h2>
    <br>
    <div>
        <a href="{{route('admin.add_category')}}">
            <button type="button" style="width:150px" class="btn btn-primary">Thêm mới</button>
        </a>
    </div>
    <!-- <Pagination-->
    <div class="text-center">
        <ul class="pagination justify-content-center">
            {{ $category->render() }}
        </ul>
        <style>
            p.center {
                text-align: center;
            }
        </style>
        <p class="center">Hiển thị từ 1~10 trong tổng số 100 users</p>
    </div>
    <div class>
        <h4>Danh sách sản phẩm </h4>
    </div>
    {{-- Table --}}
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Mô tả</th>
                    {{-- <th scope="col">Giá</th> --}}
                    {{-- <th scope="col">Tình trạng</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $key => $cate_pro)
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td>{{ $cate_pro->category_name }}</td>
                        <td>{{ $cate_pro->category_chucnang }}</td>
                        <td>
                            <a href="{{ URL::to('/edit-category-product/' . $cate_pro->category_id) }}" class="active"
                                ui-toggle-class="">
                                <i class="fa fa-edit blue-color"></i></a>
                            <a onclick="return confirm(' Ban co muon xoa?')"
                                href="{{ URL::to('/delete-category-product/' . $cate_pro->category_id) }}" class="active"
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
                {{ $category->render() }}
            </ul>
        </div>
    </div>
    <style>
        body {
            background: white
        }
    </style>
@endsection
