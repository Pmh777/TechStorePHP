<!-- Header -->
<?php include_once("./inc/header-admin.php"); ?>
<!-- Navbar -->
<?php include_once("./inc/navbar-admin.php"); ?>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<!-- body -->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title"></h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Nhân viên</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Table head options start -->
            <div class="row">
                <div class="col-13">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Quản lý nhân viên</h4>
                            </br>
                            <a href="add-employee.php"> <button class="btn btn-primary btn-min-width mr-0 mb-0"
                                    type="submit">Thêm mới</button></a>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li>
                                        <a data-action="collapse"><i class="ft-minus"></i></a>
                                    </li>
                                    <li>
                                        <a data-action="reload"><i class="ft-rotate-cw"></i></a>
                                    </li>
                                    <li>
                                        <a data-action="expand"><i class="ft-maximize"></i></a>
                                    </li>
                                    <li>
                                        <a data-action="close"><i class="ft-x"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">STT</th>
                                            <th scope="col">Họ và tên</th>
                                            <th scope="col">Giới tính</th>
                                            <th scope="col">Ngày sinh</th>
                                            <th scope="col">Số điện thoại</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Trạng thái</th>
                                            <th scope="col">Quyền</th>
                                            <th scope="col">#</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Nhân viên 1</td>
                                            <td>Nam</td>
                                            <td>20/1/2000</td>
                                            <td>012394575</td>
                                            <td>nhanvien1@gmail.com</td>
                                            <td>Hoạt động</td>
                                            <td>nhân viên</td>

                                            <td>
                                                <!-- <a href="detail-product.php">
                                                    <button type="button" class="btn btn-info btn-min-width mr-1 mb-1">
                                                        <i class="ft-info"></i>
                                                    </button></a> -->
                                                <a href="edit-employee.php">
                                                    <button type="button" class="btn btn-info btn-min-width mr-1 mb-1">
                                                        <i class="ft-edit"></i>
                                                    </button></a>
                                                <a href="remove-product.php">
                                                    <button type="button"
                                                        class="btn btn-danger btn-min-width mr-1 mb-1">
                                                        <i class="ft-delete"></i>
                                                    </button>
                                                </a>
                                            </td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table head options end -->
        </div>
    </div>
</div>
<!-- end body -->
<!-- ////////////////////////////////////////////////////////////////////////////-->
<?php include_once("./inc/footer-admin.php"); ?>