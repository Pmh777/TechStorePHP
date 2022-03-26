<?php include_once("include/header.php"); ?>

<!-- Cart -->
<?php include_once("include/cart.php"); ?>



<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.jpg');">
  <h2 class="ltext-105 cl0 txt-center">
    Thông tin tài khoản
  </h2>
</section>

<section class="bg0 p-t-104 p-b-116">
  <div class="container">
    <nav>
      <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
          aria-controls="nav-home" aria-selected="true">Thông tin</a>
        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
          aria-controls="nav-profile" aria-selected="false">Lịch sử mua hàng</a>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <div class="container center_div">
          <div class="row">
            <label for="staticEmail" class="col-sm-2 col-form-label"> <b>Họ và Tên:</b> </label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Trần Văn A">
            </div>
          </div>
          <div class="row">
            <label for="staticEmail" class="col-sm-2 col-form-label"> <b>Số điện thoại:</b> </label>
            <div class="col-sm-10">
              <input type="number" readonly class="form-control-plaintext" id="staticEmail" value="0793960152">
            </div>
          </div>
          <div class="row">
            <label for="staticEmail" class="col-sm-2 col-form-label"> <b>Email:</b> </label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                value="truongduy.fu@gmail.com">
            </div>
          </div>
          <div class="row">
            <label for="staticEmail" class="col-sm-2 col-form-label"> <b>Địa chỉ:</b> </label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Việt Nam">
            </div>
          </div>

        </div>


      </div>
      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        <div class="container">
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
  </div>
</section>
<!-- footer -->

<?php include_once("include/footer.php"); ?>