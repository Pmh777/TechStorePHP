<?php require_once("/xampp/htdocs/TechStorePHP/entities/orderdetail.class.php");
if (isset($_GET["orders_id"])) {
    $orders_id = $_GET['orders_id'];
    $orders_info = Orderdetail::findOrderdetail($orders_id);
    
       
    

}
?>
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

            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">Thông tin đơn hàng
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!--native-font-stack -->


            <!-- Description list alignment -->
            <section id="description-list-alignment">

                <div class="row match-height">
                    <!-- Description lists horizontal -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Thông tin đơn hàng
                                </h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">

                                    <div class="col-12">
                                        <div class="card-text">
                                            <dl class="row">
                                                <dt class="col-sm-3">Mã đơn</dt>
                                                <dd class="col-sm-9">
                                                    <dl class="row">
                                                        <dt class="col-sm-12">94383838383</dt>
                                                    </dl>
                                                </dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-sm-3">Họ và tên</dt>
                                                <dd class="col-sm-9">Lê Văn A</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-sm-3">Số điện thoại</dt>
                                                <dd class="col-sm-9">0983993838</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-sm-3">Địa chỉ</dt>
                                                <dd class="col-sm-9">12 Lê Lai, P.12, Q1</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-sm-3">Ghi chú</dt>
                                                <dd class="col-sm-9">Giao vào buổi tối</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-sm-3">Tổng tiền</dt>
                                                <dd class="col-sm-9">23.000.000</dd>
                                            </dl>

                                            <dl class="row">
                                                <dt class="col-sm-3">Trạng thái</dt>
                                                <dd class="col-sm-9">
                                                    <dl class="row">
                                                        <dt class="col-sm-12">Đã xác nhận</dt>
                                                    </dl>
                                                </dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-sm-3">Ngày tạo</dt>
                                                <dd class="col-sm-9">23/11/2022</dd>
                                            </dl>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Description lists horizontal-->
                </div>
            </section>

            <!-- table list product -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Danh sách sản phẩm</h4>
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
                                            <th class="text-center" scope="col">#</th>
                                            <th class="text-center" scope="col">Tên</th>
                                            <th class="text-center" scope="col">Số lượng</th>
                                            <th class="text-center" scope="col">Đơn giá</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th class="text-center" scope="row">1</th>
                                            <td class="text-center">Iphone 13 pro max</td>
                                            <td class="text-center">1</td>
                                            <td class="text-center">23.000.000</td>


                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<?php include_once("./inc/footer-admin.php"); ?>