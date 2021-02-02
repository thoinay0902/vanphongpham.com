<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hóa đơn thanh toán</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        .padding {
            padding: 2rem !important
        }

        .card {
            margin-bottom: 30px;
            border: none;
            -webkit-box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22);
            -moz-box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22);
            box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22)
        }

        .card-header {
            background-color: #fff;
            border-bottom: 1px solid #e6e6f2
        }

        h3 {
            font-size: 20px
        }

        h5 {
            font-size: 15px;
            line-height: 26px;
            color: #3d405c;
            margin: 0px 0px 15px 0px;
            font-family: 'Circular Std Medium'
        }

        .text-dark {
            color: #3d405c !important
        }
    </style>
</head>
<body>

<div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 padding">
    <div class="card">
        <div class="card-header p-4">
            <a class="pt-2 d-inline-block" href="#" data-abc="true" style="text-decoration: none;">
                <h4>Fruitshop.vn</h4>
            </a>
            <div class="float-right">
                <h3 class="mb-0">Hóa đơn 001</h3>
                Ngày: 20/11/2020
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h5 class="mb-3">From:</h5>
                    <h3 class="text-dark mb-1">Frutshop</h3>
                    <div>Hòa A, Phụng Hiệp, Hậu Giang</div>
                    <div>Email: thoiduong0@gmail.com</div>
                    <div>Sđt: +84 925 434 581</div>
                </div>
                <div class="col-sm-6 ">
                    <h5 class="mb-3">To:</h5>
                    <h3 class="text-dark mb-1">Nguyễn Văn Thức</h3>
                    <div>118, Nguyễn Văn Cừ</div>
                    <div>Thới Bình, Cà Mau</div>
                    <div>Email: thuc123@gmail.com</div>
                    <div>Sđt: +84 923 789 456</div>
                </div>
            </div>
            <div class="table-responsive-sm">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th class="center">Stt</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá bán</th>
                        <th class="right">Số lượng</th>
                        <th class="center">Tổng tiền</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="center">1</td>
                        <td class="left strong">Táo</td>
                        <td class="left">25000đ/Kg</td>
                        <td class="right">3Kg</td>
                        <td class="center">75000đ</td>
                    </tr>
                    <tr>
                        <td class="center">2</td>
                        <td class="left">Chuối</td>
                        <td class="left">30000đ/Kg</td>
                        <td class="right">2Kg</td>
                        <td class="center">60000đ/Kg</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-5">
                </div>
                <div class="col-lg-4 col-sm-5 ml-auto">
                    <table class="table table-clear">
                        <tbody>
                        <tr>
                            <td class="left">
                                <strong class="text-dark">Tổng phụ</strong>
                            </td>
                            <td class="right">135000đ</td>
                        </tr>
                        <tr>
                            <td class="left">
                                <strong class="text-dark">Khuyến mãi (20%)</strong>
                            </td>
                            <td class="right">25000đ</td>
                        </tr>
                        <tr>
                            <td class="left">
                                <strong class="text-dark">Thuế (0%)</strong>
                            </td>
                            <td class="right">0đ</td>
                        </tr>
                        <tr>
                            <td class="left">
                                <strong class="text-dark">Tổng thanh toán</strong> </td>
                            <td class="right">
                                <strong class="text-dark">110000đ</strong>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card-footer bg-white">
            <p class="mb-0">Hòa An, Phụng Hiệp, Hậu Giang</p>
        </div>
    </div>

    <div class="card-tools text-right">
        <button class="btn btn-danger btn-sm" type="button" id="btn-print" onclick="Print_pdf();">
            <i class="fa fa-print"></i> In hóa đơn
        </button>
    </div>
</div>

<script>
    function Print_pdf() {
        document.getElementById("btn-print").style.display = "none";
        window.print();
    }
</script>

</body>
</html>












