@extends('home.profile_user.layout_profile_user')
@section('profile_col_9')

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class="table-responsive-sm">
    
    <div class="panel panel-default">
        <div class="panel-heading">Đơn hàng 0034</div>
        <div class="panel-body" style="padding:2px;">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Tên SP</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Tổng tiền</th>
                    <th scope="col">Tùy chọn</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td data-label="STT">1</td>
                    <td data-label="Hình ảnh">
                        <img class="editable img-responsive" style="max-width:100%;height:50px;"
                        src="http://bootdey.com/img/Content/avatar/avatar6.png" >
                    </td>
                    <td data-label="Tên SP">
                        Rau chân vịt
                    </td>
                    <td data-label="Giá">
                       50000 Đ
                    </td>
                    <td data-label="Số lượng">
                       3
                    </td>
                    <td data-label="Tổng tiền">
                       3
                    </td>
                    <td data-label="Tùy chọn">
                       <a class="btn btn-danger btn-sm" href="#" role="button" onclick="return confirm('Bạn có muốn hủy đơn hàng không ?');">
                           <i class="fa fa-close"></i> Hủy đơn hàng
                        </a>
                    </td>
                </tr>
                <tr>
                    <td colspan="5">
                        Tổng thanh toán: 
                    </td>
                    <td colspan="2">
                        5000000 Đ
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
      </div>
    
      <div class="panel panel-default">
        <div class="panel-heading">Đơn hàng 0034</div>
        <div class="panel-body" style="padding:2px;">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Tên SP</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Tổng tiền</th>
                    <th scope="col">Tùy chọn</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td data-label="STT">1</td>
                    <td data-label="Hình ảnh">
                    <img class="editable img-responsive" style="max-width:100%;height:50px;"
                        src="http://bootdey.com/img/Content/avatar/avatar6.png" >
                    </td>
                    <td data-label="Tên SP">
                        Trái táo
                    </td>
                    <td data-label="Giá">
                       1.000.000 Đ
                    </td>
                    <td data-label="Số lượng">
                       3
                    </td>
                    <td data-label="Tổng tiền">
                       3
                    </td>
                    <td data-label="Tùy chọn">
                       <a class="btn btn-danger btn-sm" href="#" role="button" onclick="return confirm('Bạn có muốn hủy đơn hàng không ?');">
                           <i class="fa fa-close"></i> Hủy đơn hàng
                        </a>
                    </td>
                </tr>
                <tr>
                    <td colspan="5">
                        Tổng thanh toán: 
                    </td>
                    <td colspan="2">
                        5000000 Đ
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
      </div>
    
</div>

@endsection



