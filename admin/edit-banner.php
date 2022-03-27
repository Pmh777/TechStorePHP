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
                            <li class="breadcrumb-item active">Cập nhật banner
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <form action="welcome.php" method="post">
                <!-- <section class="textarea-select"> -->
                <div class="row match-height">
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Cập nhật banner</h4>
                            </div>
                            <div class="card-block">
                                <div class="card-body">
                                    <h5 class="mt-2">Tiêu đề</h5>
                                    <fieldset class="form-group">
                                        <input type="text" class="form-control" id="basicInput">
                                    </fieldset>
                                    <h5 class="mt-2">Nội dung</h5>
                                    <fieldset class="form-group">
                                        <textarea class="form-control" id="basicTextarea" rows="3"></textarea>
                                    </fieldset>
                                    <h5 class="mt-2">Trạng thái</h5>
                                    <fieldset class="form-group">
                                        <select class="custom-select" id="customSelect">
                                            <option selected="">Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                        </select>
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
                                    <h5 class="mt-2">Vị trí</h5>
                                    <fieldset class="form-group">
                                        <input type="number" class="form-control" id="basicInput">
                                    </fieldset>
                                    <h5 class="mt-2">Ảnh</h5>
                                    <fieldset class="form-group">
                                        <input type="file" class="form-control" id="basicInput">
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary btn-min-width mr-0 mb-0" type="submit">Xác
                    nhận</button>
                <a href="#"> <button class="btn btn-secondary btn-min-width mr-0 mb-0">Hủy</button></a>
                <!-- </section> -->
            </form>
        </div>
    </div>
</div>
<!-- end body -->
<!-- ////////////////////////////////////////////////////////////////////////////-->
<?php include_once("./inc/footer-admin.php"); ?>