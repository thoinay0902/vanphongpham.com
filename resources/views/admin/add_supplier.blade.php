@extends('layout.layout_admin')
@section('title', 'Thêm nhà cung cấp')


@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6"></div>
                <div class="col-sm-6 text-right">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('list-product') }}">Nhà cung cấp</a></li>
                        <li class="breadcrumb-item active">Thêm nhà cung cấp</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection





@section('content')
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-10 offset-lg-1">
                <!-- TO DO List -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="ion ion-clipboard mr-1"></i>
                            THÊM NHÀ CUNG CẤP
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-2">
                        <form action="" method="post">

                            <div class="form-group row">
                                <div class="col-6">
                                    <label for="">Tên nhà cung cấp</label>
                                    <input type="text" name="addressSupplier" class="form-control" placeholder="Nhập tên nhà cung cấp">
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label for="">Hình ảnh</label><br>
                                    <input type="file" accept="image/*" onchange="loadFile(event)">
                                    <img id="output" style="max-width:100%;height:80px;border-radius:5px;"/>
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-6"> <label for="">Email</label>
                                    <input type="text" name="emailSupplier" class="form-control" placeholder="Nhập email nhà cung cấp">
                                </div>
                                <div class="col-6">
                                    <label for="">Địa chỉ</label>
                                    <input type="text" name="addressSupplier" class="form-control" placeholder="Nhập địa chỉ nhà cung cấp">
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label for="">Mô tả</label>
                                    <textarea name="inputDescription"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10 text-right">
                                    <button type="submit" class="btn btn-primary">Lưu</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </section>
            <!-- /.Left col -->
        </div>
        <!-- /.row (main row) -->
    </section>

    <script>
        CKEDITOR.replace('inputDescription');
    </script>

    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>

@endsection
