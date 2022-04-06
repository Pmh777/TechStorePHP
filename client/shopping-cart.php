<?php
  session_start();
  
  if (!isset($_SESSION['cart'])) {
    $_SESSION['cart']=[];
  }
  //xoa gio hang
  if(isset($_GET['delcart'])&&($_GET['delcart']==1)) unset($_SESSION['cart']);
    //xóa sp trong giỏ hàng
    if(isset($_GET['delid'])&&($_GET['delid']>=0)){
        array_splice($_SESSION['cart'],$_GET['delid'],1);
     }
  //lay data
  if(isset($_POST['addcart'])&&($_POST['addcart']))
  { 
      $img = $_POST['img'];
      $name = $_POST['name'];
      $price = $_POST['price'];
      $munber = $_POST['number'];
      
      $fl=0; //kiem tra sp co trung trong gio hang khong?
      for ($i=0; $i < sizeof($_SESSION['cart']); $i++) { 
          
          if($_SESSION['cart'][$i][1]==$name){
              $fl=1;
              $newnumber=$munber+$_SESSION['cart'][$i][3];
              $_SESSION['cart'][$i][3]=$newnumber;
              break;
          }
      }

      if( $fl==0)
      {
        $product = [$img,$name, $price, $munber];
        $_SESSION['cart'][]=$product;
        var_dump($_SESSION['cart']);
      }
  }
    
  function showCart(){
    if(isset($_SESSION['cart'])&&(is_array($_SESSION['cart'])))
    {
            $total_bill= 0;
            for ($i=0; $i < sizeof($_SESSION['cart']) ; $i++) { 
              $total = $_SESSION['cart'][$i][2] *$_SESSION['cart'][$i][3];
              $total_bill +=$total;
              echo '
              <div class="wrap-table-shopping-cart">
              <table class="table-shopping-cart">
              <tr class="table_head">
                  <th class="column-1">Số thứ tự</th>
                  <th class="column-2">Tên sản phẩm</th>
                  <th class="column-2"></th>
                  <th class="column-3">Giá</th>
                  <th class="column-4">Số lượng</th>
                  <th class="column-5">Thành tiền</th>
                  <th class="column-5"></th>
              </tr>
              <tr class="table_row">
                <td class="column-1">'.($i+1).'</td> 
                <td class="column-2">'.$_SESSION['cart'][$i][1].'</td>
                <td class="column-2">
                  <div class="how-itemcart1">
                        <img src="images/'.$_SESSION['cart'][$i][0].'" alt="IMG">
                  </div>
                </td>
                <td class="column-3">'.$_SESSION['cart'][$i][2].'</td>
                <td class="column-4">'.$_SESSION['cart'][$i][3].'</td>
                <td class="column-5">'.$total.'</td>
                <td class="column-5">
                <a href="shopping-cart.php?delid='.$i.'"> Xoá </a>
                </td>
              </tr>
              
              </tr>
                </table>
                </div>
                <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                        <div
                            class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
                            Cập nhật giỏ hàng
                        </div>
                        <div
                            class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
                            <a href="shopping-cart.php?delcart=1"><input type="button" value="XÓA GIỎ HÀNG"></a>
                        </div>
                    </div>
                ';
            }
            echo'
            <tr class="table_head">
                                <th class="column-2"> </th>
                                <th class="column-2"> </th>
                                <th class="column-2"> </th>
                                <th class="column-3"> </th>
                                <th class="column-4">Tổng tiền</th>
                                <th class="column-5">'.$total_bill.'</th>
                            </tr>
            ';             
    }
    else{
        echo '
        <div>
        <h1>Giỏ hàng trống</h1>
        </div>
        ';
    }
      
  }

?>



<?php include_once("include/header.php"); ?>

<!-- Cart -->
<?php include_once("include/cart.php"); ?>


<!-- breadcrumb -->
<div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="index.php" class="stext-109 cl8 hov-cl1 trans-04">
            Trang chủ
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>

        <span class="stext-109 cl4">
            Giỏ hàng
        </span>
    </div>
</div>


<!-- Shoping Cart -->
<form class="bg0 p-t-75 p-b-85" action="bill.php" method="post">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                <div class="m-l-25 m-r--38 m-lr-0-xl">
                    <?php showCart(); ?>
                </div>
            </div>

            <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                    <h4 class="mtext-109 cl2 p-b-30">
                        Thông tin đặt hàng
                    </h4>

                    <div class="flex-w flex-t bor12 p-b-13">
                        <div class="size-208">
                            <span class="stext-110 cl2">
                                Tên người nhận
                            </span>
                        </div>
                        <div class="size-209">
                        <div class="bor8 bg0 m-b-12">
                                <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="username"
                                    >
                            </div>
                        </div>


                    </div>
                    <div class="flex-w flex-t bor12 p-t-15 p-b-13">
                        <div class="size-208">
                            <span class="stext-110 cl2">
                                Số điện thoại
                            </span>
                        </div>

                        <div class="bor8 bg0 m-b-12">
                                <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="phoneuser"
                                    >
                            </div>
                    </div>
                    <div class="flex-w flex-t bor12 p-t-15 p-b-13">
                        <div class="size-208 w-full-ssm">
                            <span class="stext-110 cl2">
                                Địa chỉ:
                            </span>
                        </div>

                        <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
                            <div class="bor8 bg0 m-b-12">
                                <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="state"
                                   >
                            </div>
                        </div>
                    </div>
                    <button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                        <input type="submit" name="accept" id="accept">
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>




<!-- Footer -->
<?php include_once("include/footer.php"); ?>