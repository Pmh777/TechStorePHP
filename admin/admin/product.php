<!-- Header -->
<?php include_once("./inc/header-admin.php"); ?>
<!-- Navigation -->
<?php include_once("./inc/navigation-admin.php"); ?>
<!-- Navbar -->
<?php include_once("./inc/navbar-admin.php"); ?>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-wrapper-before"></div>
    <div class="content-header row">
      <div class="content-header-left col-md-4 col-12 mb-2">
        <h3 class="content-header-title">Danh sách sản phẩm</h3>
      </div>
      <div class="content-header-right col-md-8 col-12">
        <div class="breadcrumbs-top float-md-right">
          <div class="breadcrumb-wrapper mr-1">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
              <li class="breadcrumb-item active">Sản phẩm</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="content-body">
      <!-- ../../../theme-assets/images/carousel/22.jpg -->

      <!-- Header footer section start -->
      <section id="header-footer">
        <div class="row match-height">
          <div class="col-lg-4 col-md-12">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Tên sản phẩm</h4>
                <h6 class="card-subtitle text-muted">
                  Giá sản phẩm
                </h6>
              </div>
              <img class="" src="theme-assets/images/carousel/22.jpg" alt="Card image cap" />
              <div class="card-body">
                <p class="card-text">
                  Mô tả
                </p>
                <a href="#" class="card-link">Màu sắc</a>
                <a href="#" class="card-link">Tên danh mục</a>
              </div>
              <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                <span class="float-left">3 hours ago</span>
                <span class="float-right">
                  <a href="#" class="card-link">Sửa sản phẩm
                    <i class="la la-angle-right"></i>
                  </a>
                </span>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Header footer section End -->

      <!-- Content types section start -->
      <section id="content-types">
        <div class="row">
          <div class="col-12 mt-3 mb-1">
            <h4 class="text-uppercase">Content Types</h4>
            <p>
              Cards support a wide variety of content, including images,
              text, list groups, links, and more. Mix and match multiple
              content types to create the card you need.
            </p>
          </div>
        </div>
        <div class="row match-height">
          <div class="col-xl-6 col-md-6 col-sm-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <h4 class="card-title">Danh mục sản phẩm</h4>
                  <p class="card-text">
                    Some quick example text to build on the card title and
                    make up the bulk of the card's content.
                  </p>
                </div>
                <ul class="list-group list-group-flush">
                  <!-- Danh sách tên danh mục sản phẩm -->
                  <li class="list-group-item">Tên danh mục</li>
                </ul>
                <div class="card-body">
                  <a href="#" class="card-link">Thêm danh mục</a>
                  <a href="#" class="card-link">Xoá danh mục</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-6 col-md-12">
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
                        <input type="color" class="form-control form-control-color" id="exampleColorInput"
                          value="#563d7c" title="Choose your color">
                      </div>

                      <div class="form-group">
                        <label for="donationinput4" class="sr-only">Số lượng</label>
                        <input type="number" id="donationinput4" class="form-control" placeholder="Số lượng"
                          name="phone" />
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
      </section>
      <!-- Content types section end -->
    </div>
  </div>
</div>
<!-- Footer -->
<?php include_once("./inc/footer-admin.php"); ?>