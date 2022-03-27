<?php include_once("include/header.php"); ?>

<!-- Cart -->
<?php include_once("include/cart.php"); ?>


<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.jpg');">
    <h2 class="ltext-105 cl0 txt-center">
        Sign In
    </h2>
</section>


<!-- Content page -->
<section class="bg0 p-t-104 p-b-116">
    <div class="container">
        <nav>
            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-login-tab" data-toggle="tab" href="#nav-login" role="tab"
                    aria-controls="nav-login" aria-selected="true">Login</a>
                <a class="nav-item nav-link" id="nav-register-tab" data-toggle="tab" href="#nav-register" role="tab"
                    aria-controls="nav-register" aria-selected="false">Register</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-login" role="tabpanel" aria-labelledby="nav-login-tab">
                <div class="container ">
                    <div class="size-signin p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                        <form>
                            <h4 class="mtext-105 cl2 txt-center p-b-30">
                                Login
                            </h4>

                            <div class="bor8 m-b-20 how-pos4-parent">
                                <input class="stext-111 cl2 plh3 size-116 p-l-25 p-r-30" type="email" name="email"
                                    placeholder="Email">
                            </div>

                            <div class="bor8 m-b-20 how-pos4-parent">
                                <input class="stext-111 cl2 plh3 size-116 p-l-25 p-r-30" type="password" name="password"
                                    placeholder="Password">
                            </div>

                            <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                                Login
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-register" role="tabpanel" aria-labelledby="nav-register-tab">
                <div class="container ">
                    <div class="size-signin p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                        <form>
                            <h4 class="mtext-105 cl2 txt-center p-b-30">
                                Register
                            </h4>
                            <div class="bor8 m-b-20 how-pos4-parent">
                                <input class="stext-111 cl2 plh3 size-116 p-l-25 p-r-30" type="text" name="Name"
                                    placeholder="Name">
                            </div>
                            <div class="bor8 m-b-20 how-pos4-parent">
                                <input class="stext-111 cl2 plh3 size-116 p-l-25 p-r-30" type="email" name="email"
                                    placeholder="Email">
                            </div>

                            <div class="bor8 m-b-20 how-pos4-parent">
                                <input class="stext-111 cl2 plh3 size-116 p-l-25 p-r-30" type="password" name="password"
                                    placeholder="Password">
                            </div>

                            <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                                Register
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<!-- Footer -->
<?php include_once("include/footer.php"); ?>


<!-- Back to top -->
<div class="btn-back-to-top" id="myBtn">
    <span class="symbol-btn-back-to-top">
        <i class="zmdi zmdi-chevron-up"></i>
    </span>
</div>

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
<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>

</html>