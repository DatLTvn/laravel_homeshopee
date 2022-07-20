@extends ('admin_layout')
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
                <form action="{{ route('admin.save_category') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{-- <div class="row"> --}}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên danh mục</label>
                                <input type="text" name="category_name" class="form-control"
                                    id="exampleInputEmail1" placeholder="Nhập tên danh mục ">
                                @error('category_product_name')
                                    <div class="text-danger">- {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả danh mục</label>
                                <textarea class="form-control" name="category_chucnang" id="Mô tả danh mục"
                                    placeholder="Mô tả sản phẩm"></textarea>
                                @error('category_product_chucnang')
                                    <div class="text-danger">- {{ $message }}</div>
                                @enderror
                            </div>
                        
                            <div class="form-group">
                                {{-- button --}}
                                <button type="submit"  class="btn btn-info mr-3">Thêm</button>
                            </div>
                        </div>
                        {{-- up load file --}}
                        {{-- </div> F --}}
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#btnxoa').click(function() {
                $('#inputGroupFile04').val(null);
            })
        })
    </script>
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
