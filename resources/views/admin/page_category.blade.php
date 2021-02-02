@extends('layout.layout_admin')
@section('title', 'Trang lọai sản phẩm')


@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6"></div>
                <div class="col-sm-6 text-right">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Loại sản phẩm</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection





@section('content')
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-6">
                    <!-- TO DO List -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ion ion-clipboard mr-1"></i>
                                THÊM LOẠI SẢN PHẨM
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-1">
                            <form action="{{ url('post-category') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-12 col-form-label">Tên loại</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" name="inputCategoryName"
                                        placeholder="Nhập tên loại sản phẩm">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <legend class="col-form-legend col-sm-12">Mô tả loại</legend>
                                    <div class="col-sm-12">
                                        <textarea name="inputCategoryDescription" class="form-control" rows="4" placeholder="Nhập mô tả loại sản phẩm"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10 text-right">
                                        <button type="submit" class="btn btn-primary">Thêm</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </section>


                <section class="col-lg-6">


                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif


                    <!-- TO DO List -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ion ion-clipboard mr-1"></i>
                                Loại sản phẩm
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-1">
                            <table class="table">
                                <thead>

                                <tr>
                                    <th>STT</th>
                                    <th>Tên loại</th>
                                    <th>Mô tả loại</th>
                                    <th>Tùy chọn</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($show_catetorys as $key => $data)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $data->catetory_name }}</td>
                                    <td>{{ $data->catetory_description }}</td>
                                    <td>
                                        <a class="btn btn-danger btn-xs"
                                        href="{{url('delete-catetory/'.$data->id)}}" role="button" onclick="return confirm('Bạn có chắc muốn xóa không?');">
                                            <i class="fa fa-trash"></i> Xóa
                                        </a>
                                    </td>
                                </tr>
                                @empty
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </section>
                <!-- /.Left col -->
            </div>
            <!-- /.row (main row) -->
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection
