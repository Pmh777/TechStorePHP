<?php
    require_once("/xampp/htdocs/TECHSTOREPHP/entities/customer.class.php");
    $id =   (int) $_GET["id"];
    $info_customer = Customer::findCustomer($id);
   echo var_dump($info_customer);
?>
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
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">Cập nhật thông tin khách hàng
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <form action="welcome.php" method="post">
                <section class="textarea-select">
                    <div class="row match-height">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Cập nhật thông tin khách hàng</h4>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <h5 class="mt-2">Họ và tên</h5>
                                        <fieldset class="form-group">
                                            <input type="text" class="form-control" id="basicInput"
                                                value=" <?php echo $info_customer["name"]; ?>">
                                        </fieldset>
                                        <h5 class="mt-2">Giới tính</h5>
                                        <fieldset class="form-group" class="form-control" id="basicInput">
                                            <select class="custom-select" id="customSelect">
                                                <option selected="">Chọn giới tính</option>
                                                <option value="1">Nam</option>
                                                <option value="2">Nữ</option>
                                                <option value="3">Khác</option>
                                            </select>
                                        </fieldset>
                                        <h5 class="mt-2">Ngày sinh</h5>
                                        <fieldset class="form-group">
                                            <input type="date" id="basicInput" format="dd-mm-YYYY" name="birthday"
                                                class="form-control">
                                        </fieldset>
                                        <h5 class="mt-2">Số điện thoại</h5>
                                        <fieldset class="form-group">
                                            <input type="tel" class="form-control" id="basicInput">
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"></h4>
                                </div>
                                <div class="card-block">
                                    <div class="card-body">
                                        <h5 class="mt-2">Email</h5>
                                        <fieldset class="form-group">
                                            <input type="email" class="form-control" id="basicInput">
                                        </fieldset>
                                        <h5 class="mt-2">Địa chỉ</h5>
                                        <fieldset class="form-group">
                                            <input type="text" class="form-control" id="basicInput">
                                        </fieldset>
                                        <h5 class="mt-2">Mật khẩu</h5>
                                        <fieldset class="form-group">
                                            <input type="text" class="form-control" id="basicInput">
                                        </fieldset>
                                        <h5 class="mt-2">Trạng thái</h5>
                                        <fieldset class="form-group">
                                            <select class="custom-select" id="customSelect">
                                                <option selected="">Chọn trạng thái</option>
                                                <option value="1">Có</option>
                                                <option value="2">Không</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-min-width mr-0 mb-0" type="submit">Cập nhật</button>
                    <a href="#"> <button class="btn btn-secondary btn-min-width mr-0 mb-0">Hủy</button></a>
                    <!-- </section> -->
            </form>
        </div>
    </div>
</div>
<!-- end body -->
<!-- ////////////////////////////////////////////////////////////////////////////-->
<?php include_once("./inc/footer-admin.php"); ?>