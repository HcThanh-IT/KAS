<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3>Phiếu nhập mua hàng</h3>
                            <div class="outline-button">
                                <button type="button" class="btn mb-1 mr-3 btn-outline-primary">Thêm mới</button>
                                <button type="button" class="btn mb-1 mr-3 btn-outline-success">Lưu</button>
                                <button type="button" class="btn mb-1 mr-3 btn-outline-secondary">In</button>
                                <button type="button" class="btn mb-1 mr-3 btn-outline-light"><a href="">Danh sách</a></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="basic-form">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label>Ký hiệu</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>State</label>
                                            <select id="inputState" class="form-control">
                                                <option selected="selected">Chọn kho hàng...</option>
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-1">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label>Tiền tệ</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Tỷ giá</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label>Ngày</label>
                                            <input type="datetime-local" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Người giao hàng</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-1">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label>Tiền hàng</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Tỷ giá</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label>Loại chứng từ</label>
                                            <select id="inputState" class="form-control">
                                                <option selected="selected">Loại chứng từ...</option>
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Chứng từ gốc</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-1">
                                        </div>
                                        <div class="form-group col-md-1 d-flex justify-content-center align-items-center">
                                            <input type="checkbox">
                                        </div>

                                        <div class="form-group col-md-1">
                                            <label>Thuế</label>
                                            <select id="inputState" class="form-control">
                                                <option selected="selected">Thuế...</option>
                                                <option>0%</option>
                                                <option>5%</option>
                                                <option>8%</option>
                                                <option>10%</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label>Tổng thuế</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-1">
                                            <label>Tổng thuế</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label>Trạng thái</label>
                                            <select id="inputState" class="form-control">
                                                <option selected="selected">Trạng thái...</option>
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Sổ quỹ</label>
                                            <select id="inputState" class="form-control">
                                                <option selected="selected">Sổ quỹ...</option>
                                                <option>Tiền mặt</option>
                                                <option>Công nợ</option>
                                                <option>Option 3</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label>Tổng tiền</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label>Tổng tiền</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Nhà cung cấp</label>
                                            <select id="inputState" class="form-control">
                                                <option selected="selected">Chọn nhà cung cấp...</option>
                                                @foreach($suppliers as $supplier)
                                                    <option value="{{ $supplier->MaNCC }}">{{ $supplier->MaNCC }}-{{ $supplier->TenNCC }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Ghi chú</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Hàng hóa</th>
                                            <th>ĐVT</th>
                                            <th>Số lượng</th>
                                            <th>ĐVT</th>
                                            <th>Số lượng</th>
                                            <th>Đơn giá</th>
                                            <th>Đơn giá</th>
                                            <th>Đơn giá</th>
                                            <th>Đơn giá</th>
                                            <th>Đơn giá</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td class="p-0"><input type="text" class="p-2"></td>
                                            <td class="p-0"><input type="text" class="p-2"></td>
                                            <td class="p-0"><input type="text" class="p-2"></td>
                                            <td class="p-0"><input type="text" class="p-2"></td>
                                            <td class="p-0"><input type="text" class="p-2"></td>
                                            <td class="p-0"><input type="text" class="p-2"></td>
                                            <td class="p-0"><input type="text" class="p-2"></td>
                                            <td class="p-0"><input type="text" class="p-2"></td>
                                            <td class="p-0"><input type="text" class="p-2"></td>
                                            <td class="p-0"><input type="text" class="p-2"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="outline-button">
                                <button type="button" class="btn mb-1 btn-outline-primary">Lưu dòng</button>
                                
                                <button type="button" class="btn mb-1 btn-outline-success">Thêm dòng</button>
                                <button type="button" class="btn mb-1 btn-outline-danger">Xóa dòng</button>
                                <button type="button" class="btn mb-1 btn-outline-warning">Warning</button>
                                <button type="button" class="btn mb-1 btn-outline-info">Info</button>
                                <button type="button" class="btn mb-1 btn-outline-light">Light</button>
                                <button type="button" class="btn mb-1 btn-outline-dark">Dark</button>
                                <button type="button" class="btn mb-1 btn-outline-secondary">Secondary</button>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- #/ container -->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{ asset('plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <script src="{{ asset('js/settings.js') }}"></script>
    <script src="{{ asset('js/gleek.js') }}"></script>
    <script src="{{ asset('js/styleSwitcher.js') }}"></script>

    <script src="{{ asset('plugins/validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('plugins/validation/jquery.validate-init.js') }}"></script>

</body>

</html>