<!-- Header -->
<?php include_once("./inc/header-admin.php"); ?>

<!-- Navbar -->
<?php include_once("./inc/navbar-admin.php"); ?>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">Tables</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Striped rows start -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Quản lý khách hàng</h4>
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
                                            <th scope="col">Stt</th>
                                            <th scope="col">Họ và Tên</th>
                                            <th scope="col">Số điện thoại</th>
                                            <th scope="col">Ngày sinh</th>
                                            <th scope="col">Giới tính</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Địa chỉ</th>
                                            <th scope="col">Mật khẩu</th>
                                            <th scope="col">#</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Truong Loc</td>
                                            <td>0793960152</td>
                                            <td>22/11/2000</td>
                                            <td>Nam</td>
                                            <td>truongduy.fu@gmail.com</td>
                                            <td>Việt Nam</td>
                                            <td>asd@98asdb81i1eqweb123</td>
                                            <td> <a href="info-detail.php">
                                                    <button type="button" class="btn btn-info btn-min-width mr-1 mb-1">
                                                        <i class="ft-edit"></i> Chi tiết
                                                    </button></a>
                                                <button type="button" class="btn btn-danger btn-min-width mr-1 mb-1">
                                                    <i class="ft-delete"></i> Xoá
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Truong My</td>
                                            <td>0793960156</td>
                                            <td>22/11/2000</td>
                                            <td>Nam</td>
                                            <td>truongduy.fp@gmail.com</td>
                                            <td>Việt Nam</td>
                                            <td>asd@98asdb81i1eqweb123</td>
                                            <td> <a href="info-detail.php">
                                                    <button type="button" class="btn btn-info btn-min-width mr-1 mb-1">
                                                        <i class="ft-edit"></i> Chi tiết
                                                    </button></a>
                                                <button type="button" class="btn btn-danger btn-min-width mr-1 mb-1">
                                                    <i class="ft-delete"></i> Xoá
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Truong Lam</td>
                                            <td>0793960112</td>
                                            <td>22/11/2000</td>
                                            <td>Nam</td>
                                            <td>truongduy.fw@gmail.com</td>
                                            <td>Việt Nam</td>
                                            <td>asd@98asdb81i1eqweb123</td>
                                            <td> <a href="info-detail.php">
                                                    <button type="button" class="btn btn-info btn-min-width mr-1 mb-1">
                                                        <i class="ft-edit"></i> Chi tiết
                                                    </button></a>
                                                <button type="button" class="btn btn-danger btn-min-width mr-1 mb-1">
                                                    <i class="ft-delete"></i> Xoá
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Striped rows end -->


        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<?php include_once("./inc/footer-admin.php"); ?>