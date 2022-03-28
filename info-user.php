<?php include_once("include/header.php"); ?>

<!-- Cart -->
<?php include_once("include/cart.php"); ?>



<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.png');">
  <h2 class="ltext-105 cl0 txt-center">
    Thông tin tài khoản
  </h2>
</section>

<section class="bg0 p-t-104 p-b-116">
  <div class="container">
    <div class="row">
      <div class="col-2">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
            aria-controls="v-pills-home" aria-selected="true">Thông tin</a>
          <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
            aria-controls="v-pills-profile" aria-selected="false">Cập nhật thông tin</a>
          <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
            aria-controls="v-pills-messages" aria-selected="false">Đổi mật khẩu</a>
        </div>
      </div>
      <div class="col-10">
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            .<div class="container">
              <div class="row size-650 bor10 mx-auto p-lr-20 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                <div class="col-sm-5">
                  <div class=" align-items-center">
                    <h4 style="text-align: center; margin-bottom:30px">Thông tin người dùng</h4>
                    <div class="row ">
                      <label for="staticEmail" class="col col-form-label"> <b>Họ và Tên:</b>
                      </label>
                      <div class="col-6">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Trần Văn A">
                      </div>
                    </div>
                    <div class="row">
                      <label for="staticEmail" class="col col-form-label "> <b>Số điện thoại:</b> </label>
                      <div class="col-6">
                        <input type="number" readonly class="form-control-plaintext" id="staticEmail"
                          value="0793960152">
                      </div>
                    </div>
                    <div class="row">
                      <label for="staticEmail" class="col col-form-label "> <b>Email:</b> </label>
                      <div class="col-6">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                          value="truongduy.fu@gmail.com">
                      </div>
                    </div>
                    <div class="row">
                      <label for="staticEmail" class="col col-form-label "> <b>Địa chỉ:</b> </label>
                      <div class="col-6">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Việt Nam">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-7">
                  <div class="container">
                    <h4 style="text-align: center; margin-bottom:30px">Lịch sử mua hàng</h4>
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Mã</th>
                          <th scope="col" class="text-center">Ngày giao</th>
                          <th scope="col" class="text-center">Số lượng</th>
                          <th scope="col">Tổng tiền</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td class="text-center">05/12/2021</td>
                          <td class="text-center">5</td>
                          <td>900.000vnđ</td>
                        </tr>
                        <tr>
                        <tr>
                          <th scope="row">2</th>
                          <td class="text-center">05/12/2021</td>
                          <td class="text-center">5</td>
                          <td>900.000vnđ</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td class="text-center">05/12/2021</td>
                          <td class="text-center">5</td>
                          <td>900.000vnđ</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>..</div>
          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <div class="container size-210 bor10 mx-auto p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md align-items-center">
              <form>
                <div class="bor8 m-b-20 how-pos4-parent">
                  <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="name" placeholder="Họ Tên">
                  <img class="how-pos4 pointer-none" src="images/icons/icon-user.png" alt="ICON">
                </div>
                <div class="bor8 m-b-20 how-pos4-parent">
                  <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="password" name="text"
                    placeholder="Số điện thoại">
                  <img class="how-pos4 pointer-none" src="images/icons/icon-password.png" alt="ICON">
                </div>
                <div class="bor8 m-b-20 how-pos4-parent">
                  <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="password" name="text"
                    placeholder="Địa chỉ">
                  <img class="how-pos4 pointer-none" src="images/icons/icon-password.png" alt="ICON">
                </div>

                <div class="bor8 m-b-20 how-pos4-parent">
                  <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="email" name="email"
                    placeholder="Email">
                  <img class="how-pos4 pointer-none" src="images/icons/icon-password.png" alt="ICON">
                </div>

                <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                  Cập nhật
                </button>
              </form>
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
            <div class="container size-210 bor10 mx-auto p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md align-items-center">
              <form action="">
                <div class="bor8 m-b-20 how-pos4-parent">
                  <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="password" name="password"
                    placeholder="Mật khẩu cũ">
                  <img class="how-pos4 pointer-none" src="images/icons/icon-password.png" alt="ICON">
                </div>
                <div class="bor8 m-b-20 how-pos4-parent">
                  <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="password" name="password"
                    placeholder="Mật khẩu mới">
                  <img class="how-pos4 pointer-none" src="images/icons/icon-password.png" alt="ICON">
                </div>
                <div class="bor8 m-b-20 how-pos4-parent">
                  <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="password" name="password"
                    placeholder="Nhập lại mật khẩu">
                  <img class="how-pos4 pointer-none" src="images/icons/icon-password.png" alt="ICON">
                </div>
                <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                  Đổi mật khẩu
                </button>
              </form>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- footer -->

<?php include_once("include/footer.php"); ?>