<?php require_once("/xampp/htdocs/TechStorePHP/entities/customer.class.php"); 
 session_start();
if (isset($_POST["submit"]) && $_POST["email"] != '' && $_POST["password"] != '' && $_POST["name"] != '' && $_POST["address"] != '') {
    $customer_id = "";
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $birthday = '';
    $gender = '';
    $email = $_POST["email"];
    $address = $_POST["address"];
    $password = md5($_POST["password"]);
    $status = "";
    $created_at = "";


    $check = Customer::checkRegister($email);
    if(check > 0){
      $_SESSION["notification"] = "Email đã được đăng ký!";
      header("Location: register.php/fail");
    }else{
      $newCustomer = new Customer($customer_id,$name, $phone, $birthday, $gender, $email, $address,$password,$status,$created_at);
      $result = $newCustomer->createCustomer();
      if (!$result) {
          header("Location: register.php");
      } else {
          header("Location: index.php");
      }
    }
   
}
?>
<?php include_once("include/header.php"); ?>

<!-- Cart -->
<?php include_once("include/cart.php"); ?>


<!-- Content page -->
<section class="bg0 p-t-104 p-b-116">
    <div class="container">
        <div class="flex-w flex-tr">
            <div class="size-210 bor6 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">

                <div class="flex-w w-full">
                    <div class="size-212 p-t-2">
                        <h1 class="mtext-111 cl2 txt-center p-b-30" style="font-size: 38px;">
                            Đăng Ký
                        </h1>
                        <hr style="border: 2px solid #000">
                    </div>
                </div>
            </div>
            <div class="size-210 bor16 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                <form method="POST">
                <p><?php if (isset($_SESSION["notification"])) {
								echo $_SESSION["notification"];
								unset($_SESSION["notification"]);
							} ?></p>
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="name"
                            placeholder="Họ Tên">
                        <img class="how-pos4 pointer-none" src="images/icons/icon-user.png" alt="ICON">
                    </div>
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="phone"
                            placeholder="Số điện thoại">
                        <img class="how-pos4 pointer-none" src="images/icons/icon-user.png" alt="ICON">
                    </div>
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="address"
                            placeholder="Địa chỉ">
                        <img class="how-pos4 pointer-none" src="images/icons/icon-user.png" alt="ICON">
                    </div>
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="email" name="email"
                            placeholder="Email">
                        <img class="how-pos4 pointer-none" src="images/icons/icon-email.png" alt="ICON">
                    </div>

                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="password" name="password"
                            placeholder="Mật khẩu">
                        <img class="how-pos4 pointer-none" src="images/icons/icon-password.png" alt="ICON">
                    </div>
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="password" name="password"
                            placeholder="Nhập lại mật khẩu">
                        <img class="how-pos4 pointer-none" src="images/icons/icon-password.png" alt="ICON">
                    </div>
                    <input class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer" type="submit" name="btbsubmit"
                    value="Đăng ký"  >
                   
                </form>
            </div>


        </div>
    </div>
</section>


<!-- Footer -->
<?php include_once("include/footer.php"); ?>