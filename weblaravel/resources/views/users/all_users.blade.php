@extends('admin_layout')
@section('admin_content')

    <h2>Xây dựng quản lí users</h2>
    <br>
    <!-- Filter  -->
    <form id="frm_filter" action="{{ URL::to('/panel/all-custom') }}" method="GET">
        {{ csrf_field() }}

        <div class="row">
            <div class="col-md-3">
                <label for="validationCustom01" class="form-label">Tên</label>
                <input type="text" value="{{ $user_name }}" name="user_name" class="form-control">
            </div>
            <div class="col-md-3">
                <label for="validationCustom01" class="form-label">Nhóm</label>
                <input type="text" value="{{ $user_group }}" name="user_group" class="form-control">
            </div>
            <div class="col-md-3">
                <label for="validationCustom01">Địa chỉ</label>
                <input type="text" name="custom_phone" class="form-control">
            </div>
            <div class="col-md-3">
                <label for="validationCustom01" class="form-label ">Trạng thái</label>
                <select name="user_status" aria-label="Default select example" class="form-control">
                    <option selected value="">Trạng thái</option>
                    <option value="1">Đang hoạt động</option>
                    <option value="0">Tạm khóa</option>
                </select>
            </div>
        </div>
    </form>
    
    </div>
    <br>
    <!-- Actions  -->
    <div>
        <a href="{{route('users.add_users')}}">
            <button type="button" style="width:150px" class="btn btn-primary">Thêm mới</button>
        </a>
        <button type="submit" form="frm_filter" class="btn btn-primary  pull-right">Search</button>
        <a href="{{route('users.all_users')}}" class="btn btn-primary  mr-3 pull-right">Clear</a>
    </div>
    <br>
    </div>
    <!-- Pagination-->
    <div class="text-center">
        <ul class="pagination justify-content-center">
            {{ $all->render() }}
        </ul>
        <style>
            p.center {
                text-align: center;
            }
        </style>
        <p class="center">Hiển thị từ 1~10 trong tổng số 100 users</p>
    </div>
    <div class="col-6">
        <h5>Danh sách người dùng</h5>
    </div>
    <!-- User Table-->
    <>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Họ tên</th>
                    <th scope="col">Email</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Địa chỉ</th>
                </tr>
            </thead>
            <tbody>
                @if ($all != null)
                    @foreach ($all as $users)
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td>{{ $users->users_name }}</td>
                            <td>{{ $users->users_gmail }}</td>
                            <td>{{ $users->users_phone }}</td>
                            <td>{{ $users->users_address }}</td>
                            <td>
                                <a href="{{ URL::to('/panel/edit-users/' . $users->users_id) }}" class="active"
                                    ui-toggle-class="">
                                    <i class="fa fa-edit blue-color"></i></a>
                                <a onclick="return confirm(' Bạn có muốn khóa người dùng này?')"
                                    href="{{ URL::to('/panel/all-users') }}" class="active"
                                    ui-toggle-class="">
                                    <i class="fa fa-user-times"></i></a>
                                <a onclick="return confirm(' Ban co muon xoa?')"
                                    href="{{ URL::to('/panel/delete-users/' . $users->users_id) }}" class="active"
                                    ui-toggle-class="">
                                    <i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>

        <div class="text-center">
            <ul class="pagination justify-content-center">
                {{ $all->render() }}
            </ul>
        </div>
    </div>
    <style>
        body {
            background: white
        }
    </style>
@endsection
