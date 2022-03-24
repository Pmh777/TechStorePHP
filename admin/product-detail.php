<!-- Header -->
<?php include_once("./inc/header-admin.php"); ?>
<!-- Navigation -->
<?php include_once("./inc/navigation-admin.php"); ?>
<!-- Navbar -->
<?php include_once("./inc/navbar-admin.php"); ?>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-body">
      <div class="container">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <h4 class="card-title">Thêm sản phẩm</h4>
            </div>
            <div class="card-body">
              <form class="form">
                <div class="form-body">
                  <div class="form-group">
                    <label for="donationinput1" class="sr-only">Tên sản phẩm</label>
                    <input type="text" id="donationinput1" class="form-control" placeholder="Tên sản phẩm"
                      name="fname" />
                  </div>
                  <div class="form-group">
                    <label for="donationinput2" class="sr-only">Giá sản phẩm</label>
                    <input type="number" id="donationinput2" class="form-control" placeholder="Giá sản phẩm"
                      name="lanme" />
                  </div>
                  <div class="form-group">
                    <label for="exampleColorInput" class="form-label">Màu sắc</label>
                    <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c"
                      title="Choose your color">
                  </div>

                  <div class="form-group">
                    <label for="donationinput4" class="sr-only">Số lượng</label>
                    <input type="number" id="donationinput4" class="form-control" placeholder="Số lượng" name="phone" />
                  </div>

                  <div class="form-group">
                    <label for="donationinput7" class="sr-only">Mô tả</label>
                    <textarea id="donationinput7" rows="5" class="form-control square" name="message"
                      placeholder="Mô tả"></textarea>
                  </div>
                  <div>
                    <label for="formFileLg" class="form-label">Thêm ảnh</label>
                    <input class="form-control form-control-lg" id="formFileLg" type="file">
                  </div>
                  <div>
                    <label for="formFileLg" class="form-label">Thêm ảnh</label>
                    <input class="form-control form-control-lg" id="formFileLg" type="file">
                  </div>
                  <div>
                    <label for="formFileLg" class="form-label">Thêm ảnh</label>
                    <input class="form-control form-control-lg" id="formFileLg" type="file">
                  </div>
                  <div>
                    <label for="formFileLg" class="form-label">Thêm ảnh</label>
                    <input class="form-control form-control-lg" id="formFileLg" type="file">
                  </div>
                  <div>
                    <label for="formFileLg" class="form-label">Thêm ảnh</label>
                    <input class="form-control form-control-lg" id="formFileLg" type="file">
                  </div>
                </div>
                <div class="form-actions center">
                  <button type="submit" class="btn btn-outline-primary">
                    Thêm
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