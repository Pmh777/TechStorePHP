<?php include_once("include/header.php"); ?>

<!-- Cart -->
<?php include_once("include/cart.php"); ?>



<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.png');">
  <h2 class="ltext-105 cl0 txt-center">
    Liên hệ
  </h2>
</section>


<!-- Content page -->
<section class="bg0 p-t-104 p-b-116">
  <div class="container">
    <div class="flex-w flex-tr">
      <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
        <form>
          <h4 class="mtext-105 cl2 txt-center p-b-30">
            Gửi tin nhắn cho chúng tôi
          </h4>

          <div class="bor8 m-b-20 how-pos4-parent">
            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email"
              placeholder="Địa chỉ email của bạn">
            <img class="how-pos4 pointer-none" src="images/icons/icon-email.png" alt="ICON">
          </div>

          <div class="bor8 m-b-30">
            <textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="msg"
              placeholder="Bạn cần giúp đỡ về vấn đề gì?"></textarea>
          </div>

          <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
            Xác nhận
          </button>
        </form>
      </div>

      <div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
        <div class="flex-w w-full p-b-42">
          <span class="fs-18 cl5 txt-center size-211">
            <span class="lnr lnr-map-marker"></span>
          </span>

          <div class="size-212 p-t-2">
            <span class="mtext-110 cl2">
              Địa chỉ
            </span>

            <p class="stext-115 cl6 size-213 p-t-18">
              Khu Công nghệ cao TP.HCM (SHTP), Xa lộ Hà Nội, P.Hiệp Phú, TP.Thủ Đức, TP.HCM
            </p>
          </div>
        </div>

        <div class="flex-w w-full p-b-42">
          <span class="fs-18 cl5 txt-center size-211">
            <span class="lnr lnr-phone-handset"></span>
          </span>

          <div class="size-212 p-t-2">
            <span class="mtext-110 cl2">
              Đường dây nóng
            </span>

            <p class="stext-115 cl1 size-213 p-t-18">
              +1 800 1236879
            </p>
          </div>
        </div>

        <div class="flex-w w-full">
          <span class="fs-18 cl5 txt-center size-211">
            <span class="lnr lnr-envelope"></span>
          </span>

          <div class="size-212 p-t-2">
            <span class="mtext-110 cl2">
              Địa chỉ email
            </span>

            <p class="stext-115 cl1 size-213 p-t-18">
              contact@gmail.com
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Map -->
<section class="bg0 p-t-30 p-b-70">
  <div class="map-responsive">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.420594896581!2d106.78291401462133!3d10.85558006069655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175276e7ea103df%3A0xb6cf10bb7d719327!2sHUTECH%20University%20-%20E%20Campus%20(SHTP)!5e0!3m2!1svi!2s!4v1648437791543!5m2!1svi!2s"
      width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>

</section>
<?php include_once("include/footer.php"); ?>