@extends ('admin_layout')
@section ('admin_content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <h2> Thêm người khách hàng </h2>
                    @error('msg')
	                <div class="text-danger" >{{ $message }}</div>
                    @enderror
                </header>
                <div class="panel-body">
                    <form role="form" action = "{{URL::to('/panel/save-custom')}}" method="post">
                        {{csrf_field()}}
                    <div class="position-center">
                        <form role="form">
                        <div class="form-group">    
                            <br>
                            <label for="exampleInputEmail1">Tên khách hàng:</label>
                            <input type="name" name ="custom_name" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên">
                            @error('custom_name')
				            <div class="text-danger" >- {{ $message }}</div>
			                @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email:</label>
                            <input type="text" name ="custom_email" class="form-control" id="exampleInputEmail1" placeholder="Nhập email">
                            @error('custom_email')
				            <div class="text-danger" >- {{ $message }}</div>
			                @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Địa chỉ:</label>
                            <input type="text" name ="custom_address" class="form-control" id="exampleInputEmail1" placeholder="Nhập địa chỉ">
                            @error('custom_address')
				            <div class="text-danger" >- {{ $message }}</div>
			                @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Điện thoại:</label>
                            <input type="integer" name ="custom_phone" class="form-control" id="exampleInputEmail1"  placeholder="Nhập điện thoại">
                            @error('custom_phone')
				            <div class="text-danger" >- {{ $message }}</div>
			                @enderror
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="vehicle1">Trạng thái:</label>
                            <input type="checkbox" id="vehicle1" name="" value="">
                            <br>
                            <br>
                        </div>
                        <button type="reset"  class="btn btn-info">Hủy</button>
                        <button type="submit"  class="btn btn-info">Lưu</button>
                    </form>
                    </div>
                </div>  
            </section>
    </div>
    <style>
        .panel{
            background-color: white !important
    
        }
    </style>
      <style>
        body {
            background: white
        }
    </style>
@endsection