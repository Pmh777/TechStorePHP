<!-- Header -->
<?php include_once("./inc/header-admin.php"); ?>

<!-- Navbar -->
<?php include_once("./inc/navbar-admin.php"); ?>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-body">
            <div class="container">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body text-center">
                            <h4 class="card-title ">Cập nhật thông tin nhân viên</h4>
                        </div>
                        <div class="card-body">
                            <form class="form">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label for="donationinput1" class="form-label">Họ và tên</label>
                                        <input type="text" id="donationinput1" class="form-control"
                                            placeholder="Tên sản phẩm" name="fname" />
                                    </div>
                                    <div class="form-group">
                                        <label for="donationinput2" class="form-label">Giới tính</label>
                                        <select class="custom-select" id="customSelect">
                                            <option selected="">Chọn giới tính</option>
                                            <option value="1">Nam</option>
                                            <option value="2">Nữ</option>
                                            <option value="3">Khác</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleColorInput" class="form-label">Ngày sinh</label>
                                        <input type="date" id="basicInput" format="dd-mm-YYYY" name="birthday"
                                            class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="donationinput4" class="form-label">Số điện thoại</label>
                                        <input type="tel" id="donationinput4" class="form-control"
                                            placeholder="Số lượng" name="phone" />
                                    </div>
                                    <div class="form-group">
                                        <label for="donationinput4" class="form-label">Email</label>
                                        <input type="email" id="donationinput4" class="form-control" placeholder="email"
                                            name="phone" />
                                    </div>

                                    <div class="form-group">
                                        <label for="donationinput7" class="form-label">Mật khẩu</label>
                                        <input type="text" class="form-control" id="basicInput">
                                    </div>
                                    <div>
                                        <label for="formFileLg" class="form-label">Trạng thái</label>
                                        <select class="custom-select" id="customSelect">
                                            <option selected="">Chọn trạng thái</option>
                                            <option value="1">Có</option>
                                            <option value="2">Không</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="formFileLg" class="form-label">Quyền</label>
                                        <select class="custom-select" id="customSelect">
                                            <option selected="">Chọn quyền</option>
                                            <option value="1">Quản lí</option>
                                            <option value="2">Nhân viên</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-actions center">
                                    <button type="submit" class="btn btn-outline-primary">
                                        Cập nhật
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<?php include_once("./inc/footer-admin.php"); ?>