@extends ('admin_layout')
@section ('admin_content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <h2> Sửa sản phẩm</h2>
                </header>   
                </div>
                <div class="panel-body">
                    @foreach($edit_category_product as $key => $edit_valuecate)
                    <div class="position-center">
                        <form role="form" action = "{{URL::to('/update-category-product/'.$edit_valuecate->category_id)}}" method="post">
                            {{csrf_field()}}
                        <div class="form-group">
                            <br>
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            <input type="text" value = "{{ $edit_valuecate->category_name}}" name ="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên sản phâm">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá bán</label>
                            <input type="text" value = "{{ $edit_valuecate->category_gia}}" name ="category_product_gia" class="form-control" id="exampleInputEmail1" placeholder="Nhập giá sản phẩm">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả danh mục</label>
                            <textarea  class="form-control" value = "{{ $edit_valuecate->category_chucnang}}" name ="category_product_chucnang" id="Mô tả danh mục" placeholder="Mô tả sản phẩm"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Trạng thái</label>   
                            <select name ="category_product_desc" value = "{{ $edit_valuecate->category_desc}}" class="form-control input-sm m-bot15">
                                <option value ="Đang bán">Đang bán</option>
                                <option value="Hết hàng">Hết hàng</option>
                            </select>
                            <br>
                        </div>
                        <button type="submit" name="add_category_product" class="btn btn-info">Cập nhật danh mục</button>
                        <button type="submit" name="add_category_product" class="btn btn-info">Hủy</button>
                    </form>
                    </div>
                    @endforeach
                </div>
            </section>
    </div>
@endsection