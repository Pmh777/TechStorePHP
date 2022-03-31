<?php include_once("include/header.php"); ?>

<!-- Cart -->
<?php include_once("include/cart.php"); ?>



<!-- Slider -->
<section class="section-slide">
  <div class="wrap-slick1">
    <div class="slick1">
      <div class="item-slick1" style="background-image: url(images/slide1.jpg);">
        <div class="container h-full">
          <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
            <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
              <span class="ltext-101 cl2 respon2">
                Women Collection 2018
              </span>
            </div>

            <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
              <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                NEW SEASON
              </h2>
            </div>

            <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
              <a href="product.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                Xem thêm
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="item-slick1" style="background-image: url(images/slide2.jpg);">
        <div class="container h-full">
          <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
            <div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
              <span class="ltext-101 cl2 respon2">
                Men New-Season
              </span>
            </div>

            <div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
              <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                Jackets & Coats
              </h2>
            </div>

            <div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
              <a href="product.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                Xem thêm
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="item-slick1" style="background-image: url(images/slide3.jpg);">
        <div class="container h-full">
          <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
            <div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
              <span class="ltext-101 cl2 respon2">
                Men Collection 2018
              </span>
            </div>

            <div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
              <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                New arrivals
              </h2>
            </div>

            <div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
              <a href="product.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                Xem thêm
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Product -->
<section class="bg0 p-t-50 p-b-140">
  <div class="container">
    <div class="p-b-10 text-center">
      <h3 class="ltext-103 cl5">
        Sản phẩm nổi bậc
      </h3>
    </div>

    <div class="flex-w flex-sb-m p-b-52">
      <div class="flex-w flex-l-m filter-tope-group m-tb-10">
        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
          Tất cả sản phẩm
        </button>

        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".phone">
          Smartphone
        </button>

        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".laptop">
          Laptop
        </button>

        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".macbook">
          Macbook
        </button>

        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".accessories">
          Phụ kiện
        </button>
      </div>

      <div class="flex-w flex-c-m m-tb-10">
        <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
          <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
          <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
          Bộ lọc
        </div>

        <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
          <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
          <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
          Tìm kiếm
        </div>
      </div>

      <!-- Search product -->
      <div class="dis-none panel-search w-full p-t-10 p-b-15">
        <div class="bor8 dis-flex p-l-15">
          <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
            <i class="zmdi zmdi-search"></i>
          </button>

          <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Tìm kiếm">
        </div>
      </div>

      <!-- Filter -->
      <?php include_once("include/filter.php"); ?>
    </div>

    <div class="row isotope-grid">
      <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item phone">
        <!-- Block2 -->
        <div class="block2">
          <div class="block2-pic hov-img0">
            <img src="images/product-02.png" alt="IMG-PRODUCT">

            <a href="#"
              class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
              Xem nhanh
            </a>
          </div>

          <div class="block2-txt flex-w flex-t p-t-14">
            <div class="block2-txt-child1 flex-col-l ">
              <a href="product-detail.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                Tên sản phẩm
              </a>

              <span class="stext-105 cl3">
                Giá sản phẩm
              </span>
            </div>


          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item phone">
        <!-- Block2 -->
        <div class="block2">
          <div class="block2-pic hov-img0">
            <img src="images/product-03.png" alt="IMG-PRODUCT">

            <a href="#"
              class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
              Xem nhanh
            </a>
          </div>

          <div class="block2-txt flex-w flex-t p-t-14">
            <div class="block2-txt-child1 flex-col-l ">
              <a href="product-detail.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                Tên sản phẩm
              </a>

              <span class="stext-105 cl3">
                Giá sản phẩm
              </span>
            </div>


          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item phone">
        <!-- Block2 -->
        <div class="block2">
          <div class="block2-pic hov-img0">
            <img src="images/product-04.png" alt="IMG-PRODUCT">

            <a href="#"
              class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
              Xem nhanh
            </a>
          </div>

          <div class="block2-txt flex-w flex-t p-t-14">
            <div class="block2-txt-child1 flex-col-l ">
              <a href="product-detail.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                Tên sản phẩm
              </a>

              <span class="stext-105 cl3">
                Giá sản phẩm
              </span>
            </div>


          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item phone">
        <!-- Block2 -->
        <div class="block2">
          <div class="block2-pic hov-img0">
            <img src="images/product-05.png" alt="IMG-PRODUCT">

            <a href="#"
              class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
              Xem nhanh
            </a>
          </div>

          <div class="block2-txt flex-w flex-t p-t-14">
            <div class="block2-txt-child1 flex-col-l ">
              <a href="product-detail.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                Tên sản phẩm
              </a>

              <span class="stext-105 cl3">
                Giá sản phẩm
              </span>
            </div>


          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item phone">
        <!-- Block2 -->
        <div class="block2">
          <div class="block2-pic hov-img0">
            <img src="images/product-08.png" alt="IMG-PRODUCT">

            <a href="#"
              class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
              Xem nhanh
            </a>
          </div>

          <div class="block2-txt flex-w flex-t p-t-14">
            <div class="block2-txt-child1 flex-col-l ">
              <a href="product-detail.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                Tên sản phẩm
              </a>

              <span class="stext-105 cl3">
                Giá sản phẩm
              </span>
            </div>


          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item phone">
        <!-- Block2 -->
        <div class="block2">
          <div class="block2-pic hov-img0">
            <img src="images/product-07.png" alt="IMG-PRODUCT">

            <a href="#"
              class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
              Xem nhanh
            </a>
          </div>

          <div class="block2-txt flex-w flex-t p-t-14">
            <div class="block2-txt-child1 flex-col-l ">
              <a href="product-detail.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                Tên sản phẩm
              </a>

              <span class="stext-105 cl3">
                Giá sản phẩm
              </span>
            </div>


          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item laptop">
        <!-- Block2 -->
        <div class="block2">
          <div class="block2-pic hov-img0">
            <img src="images/product-01.png" alt="IMG-PRODUCT">

            <a href="#"
              class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
              Xem nhanh
            </a>
          </div>

          <div class="block2-txt flex-w flex-t p-t-14">
            <div class="block2-txt-child1 flex-col-l ">
              <a href="product-detail.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                Tên sản phẩm
              </a>

              <span class="stext-105 cl3">
                Giá sản phẩm
              </span>
            </div>


          </div>
        </div>
      </div>
    </div>

    <!-- Load more -->
    <div class="flex-c-m flex-w w-full p-t-45">
      <a href="product.php" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
        Xem thêm
      </a>
    </div>
  </div>
</section>


<!-- Footer -->
<?php include_once("include/footer.php"); ?>