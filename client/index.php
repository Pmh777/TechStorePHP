
<?php require_once("/xampp/htdocs/TechStorePHP/entities/banner.class.php");
$banner = Banner::list_banner();
session_start();
// echo '<pre>';
// var_dump($_SESSION["user_id"]);
// echo '</pre>';
?>
<?php include_once("include/header.php"); ?>

<!-- Cart -->
<?php include_once("include/cart.php"); ?>



<!-- Slider -->
<section class="section-slide">
  <div class="wrap-slick1">
    <div class="slick1">
      
    <?php foreach ( $banner as $item) : ?>
      <div class="item-slick1" style="background-image: url(images/<?php echo $item["photo"]; ?>);">
        <div class="container h-full">
          <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
            <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
              <span class="ltext-101 cl2 respon2">
<<<<<<< HEAD
                Sản phẩm độc đáo
=======
              <?php echo $item["content"]; ?>
>>>>>>> 5025c942823329789cb63436156e3a3927346c7c
              </span>
            </div>

            <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
              <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
<<<<<<< HEAD
                Chất lượng hàng đầu
=======
              <?php echo $item["caption"]; ?>
>>>>>>> 5025c942823329789cb63436156e3a3927346c7c
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
<<<<<<< HEAD

      <div class="item-slick1" style="background-image: url(images/slide2.jpg);">
        <div class="container h-full">
          <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
            <div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
              <span class="ltext-101 cl2 respon2">
                Giá cả cạnh tranh
              </span>
            </div>

            <div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
              <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                Bảo hành toàn quốc
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
                Một đêm duy nhất
              </span>
            </div>

            <div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
              <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                Chỉ có tại chúng tôi
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
=======
      <?php endforeach; ?>    
>>>>>>> 5025c942823329789cb63436156e3a3927346c7c
    </div>
  </div>
</section>

<<<<<<< HEAD
<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<script>
$(".js-select2").each(function() {
  $(this).select2({
    minimumResultsForSearch: 20,
    dropdownParent: $(this).next('.dropDownSelect2')
  });
})
</script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/slick/slick.min.js"></script>
<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
<script src="vendor/parallax100/parallax100.js"></script>
<script>
$('.parallax100').parallax100();
</script>
<!--===============================================================================================-->
<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<script>
$('.gallery-lb').each(function() { // the containers for all your galleries
  $(this).magnificPopup({
    delegate: 'a', // the selector for gallery item
    type: 'image',
    gallery: {
      enabled: true
    },
    mainClass: 'mfp-fade'
  });
});
</script>
<!--===============================================================================================-->
<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/sweetalert/sweetalert.min.js"></script>
<script>
$('.js-addwish-b2, .js-addwish-detail').on('click', function(e) {
  e.preventDefault();
});

$('.js-addwish-b2').each(function() {
  var nameProduct = $(this).parent().parent().find('.js-name-b2').php();
  $(this).on('click', function() {
    swal(nameProduct, "is added to wishlist !", "success");

    $(this).addClass('js-addedwish-b2');
    $(this).off('click');
  });
});

$('.js-addwish-detail').each(function() {
  var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').php();

  $(this).on('click', function() {
    swal(nameProduct, "is added to wishlist !", "success");

    $(this).addClass('js-addedwish-detail');
    $(this).off('click');
  });
});

/*---------------------------------------------*/

$('.js-addcart-detail').each(function() {
  var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').php();
  $(this).on('click', function() {
    swal(nameProduct, "is added to cart !", "success");
  });
});
</script>
<!--===============================================================================================-->
<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script>
$('.js-pscroll').each(function() {
  $(this).css('position', 'relative');
  $(this).css('overflow', 'hidden');
  var ps = new PerfectScrollbar(this, {
    wheelSpeed: 1,
    scrollingThreshold: 1000,
    wheelPropagation: false,
  });

  $(window).on('resize', function() {
    ps.update();
  })
});
</script>
<!--===============================================================================================-->
<script src="js/main.js"></script>
=======

<!-- Footer -->
<?php include_once("include/footer.php"); ?>
>>>>>>> 5025c942823329789cb63436156e3a3927346c7c
