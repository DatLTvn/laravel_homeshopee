@extends ('admin_layout')
@section ('admin_content')

<div class="row">
    <div class="col-lg-12">     
            <section class="panel">
                <header class="panel-heading">
                    <h2> Chỉnh sửa thông tin khách hàng</h2>
                </header>
                <div class="panel-body">
                    @foreach($edit_custom as $key => $edit_valuecustom)
                    <div class="position-center">
                        <form role="form" action = "{{URL::to('panel/update-custom/'.$edit_valuecustom->custom_id)}}" method="post">
                            {{csrf_field()}}
                        <div class="form-group">
                            <br>
                            <label for="exampleInputEmail1">Tên:</label>
                            <input type="name" value = "{{ $edit_valuecustom->custom_name}}" name ="custom_name" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email:</label>
                            <input type="email" value="{{ $edit_valuecustom->custom_email}}" name ="custom_email" class="form-control" id="exampleInputEmail1" placeholder="Nhập email">
                            <br>
                        </div>
                        <div class="form-group">
                            <br>
                            <label for="exampleInputEmail1">Địa chỉ:</label>
                            <input type="name" value = "{{ $edit_valuecustom->custom_address}}" name ="custom_address" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Điện thoại:</label>
                            <input type="integer" value="{{ $edit_valuecustom->custom_phone}}" name ="custom_phone" class="form-control" id="exampleInputEmail1" placeholder="Nhập email">
                            <br>
                        </div>
                        <button type="reset" name="add_custom" class="btn btn-info">Hủy</button>
                        <button type="submit" name="add_custom" class="btn btn-info">Lưu</button>
                    </form>
                    </div>
                    @endforeach
                </div>
            </section>
    </div>
    @endsection