<?php require_once("/xampp/htdocs/TechStorePHP/entities/product.class.php"); 
$category = Category::list_category();
$brand = Brand::list_Brand();
if (isset($_GET["id"])) {
    $id = $_GET['id'];

    $customer = Customer::findCustomer($id);

}
if(isset($_POST["update"])){
    $id = $_GET["id"];
    $category_id = $_POST["category_id"];
    $brand_id = $_POST["brand_id"];
    $name = $_POST["name"];

    $result = Product::updateProduct($id, $category_id, $brand_id, $name);
    if ($result) {
        echo "<script>alert('Update thành công');</script>";
        echo "<script>window.location.href='/TechStorePHP/admin/product.php';</script>";
    } else {
        echo "<script>alert('Update thất bại');</script>";
        echo "<script>window.location.href='/TechStorePHP/admin/product.php';</script>";
    }
}
?>

<!-- Header -->
<?php include_once("./inc/header-admin.php"); ?>
<!-- Navbar -->
<?php include_once("./inc/navbar-admin.php"); ?>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<!-- body -->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title"></h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">Cập nhật sản phẩm
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <form action="welcome.php" method="post">
                <!-- <section class="textarea-select"> -->
                <div class="row match-height">
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Cập nhật sản phẩm</h4>
                            </div>
                            <div class="card-block">
                                <div class="card-body">
                                    <h5 class="mt-2">Tên</h5>
                                    <fieldset class="form-group">
                                        <input type="text" class="form-control" id="basicInput">
                                    </fieldset>
                                    <h5 class="mt-2">Danh mục</h5>
                                    <fieldset class="form-group">
                                        <select class="custom-select" id="customSelect">
                                            <option selected="">Open this select menu</option>
                                            <?php foreach ( $category as $item) : ?>
                                                <option value="<?php echo $item["id"]; ?>"><?php echo $item["name"]; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </fieldset>
                                    <h5 class="mt-2">Thương hiệu</h5>
                                    <fieldset class="form-group">
                                        <select class="custom-select" id="customSelect">
                                            <option selected="">Open this select menu</option>
                                            <?php foreach ( $brand as $item) : ?>
                                                <option value="<?php echo $item["id"]; ?>"><?php echo $item["name"]; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </fieldset>
                                    <h5 class="mt-2">Màu sắc</h5>
                                    <fieldset class="form-group">
                                        <select class="custom-select" id="customSelect">
                                            <option selected="">Open this select menu</option>
                                            <option value="1">Đen</option>
                                            <option value="2">Trắng</option>
                                            <option value="3">Đỏ</option>
                                            <option value="4">Vàng</option>
                                        </select>
                                    </fieldset>
                                    <h5 class="mt-2">Mô tả</h5>
                                    <fieldset class="form-group">
                                        <textarea class="form-control" id="basicTextarea" rows="3"></textarea>
                                    </fieldset>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"></h4>
                            </div>
                            <div class="card-block">
                                <div class="card-body">
                                    <h5 class="mt-2">Số lượng</h5>
                                    <fieldset class="form-group">
                                        <input type="text" class="form-control" id="basicInput">
                                    </fieldset>
                                    <h5 class="mt-2">Giá</h5>
                                    <fieldset class="form-group">
                                        <input type="text" class="form-control" id="basicInput">
                                    </fieldset>
                                    <h5 class="mt-2">Ảnh</h5>
                                    <fieldset class="form-group">
                                        <input type="file" class="form-control" id="basicInput">
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary btn-min-width mr-0 mb-0" type="submit">Xác
                        nhận</button>
                <a href="#"> <button class="btn btn-secondary btn-min-width mr-0 mb-0"
                        >Hủy</button></a>
                <!-- </section> -->
            </form>
        </div>
    </div>
</div>
<!-- end body -->
<!-- ////////////////////////////////////////////////////////////////////////////-->
<?php include_once("./inc/footer-admin.php"); ?>