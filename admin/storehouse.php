<?php require_once("/xampp/htdocs/TechStorePHP/entities/storehouse.class.php"); ?>
<!-- Header -->
<?php include_once("./inc/header-admin.php"); 
$storehouse = Storehouse::list_storehouse();
?>
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
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Kho</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Table head options start -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Quản lý kho</h4>
                            </br>
                            <a href="add-product.php"> <button class="btn btn-primary btn-min-width mr-0 mb-0"
                                    type="submit">Thêm mới</button></a>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li>
                                        <a data-action="collapse"><i class="ft-minus"></i></a>
                                    </li>
                                    <li>
                                        <a data-action="reload"><i class="ft-rotate-cw"></i></a>
                                    </li>
                                    <li>
                                        <a data-action="expand"><i class="ft-maximize"></i></a>
                                    </li>
                                    <li>
                                        <a data-action="close"><i class="ft-x"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col-3">ID</th>
                                            <th scope="col-3">Thương hiệu</th>
                                            <th scope="col-3">Loại sản phẩm</th>
                                            <th scope="col-3">Tên</th>
                                            <th scope="col-3">Màu sắc</th>
                                            <th scope="col-3">Giá</th>
                                            <th scope="col-3">Số lượng</th>
                                            <th scope="col-3">Hình ảnh</th>
                                            <th scope="col-3">Mô tả</th>
                                            <th scope="col-1"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ( $storehouse as $item) : ?>
                                        <tr>
                                            <th scope="row"><?php echo $item["product_id"]; ?></th>
                                            <td><?php echo $item["product_id"]; ?></td>
                                            <td><?php echo $item["product_id"]; ?></td>
                                            <td><?php echo $item["product_id"]; ?></td>
                                            <td><?php echo $item["color_id"]; ?></td>
                                            <td><?php echo $item["price"]; ?></td>
                                            <td><?php echo $item["quantity"]; ?></td>
                                            <td><?php echo $item["image"]; ?></td>
                                            <td><?php echo $item["description"]; ?></td>
                                            <td>
                                                <a href="edit-product.php">
                                                    <button type="button" class="btn btn-info btn-min-width mr-1 mb-1">
                                                        <i class="ft-edit"></i>
                                                    </button></a>
                                                <a href="remove-product.php">
                                                    <button type="button"
                                                        class="btn btn-danger btn-min-width mr-1 mb-1">
                                                        <i class="ft-delete"></i>
                                                    </button>
                                                </a>
                                            </td>

                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table head options end -->
        </div>
    </div>
</div>
<!-- end body -->
<!-- ////////////////////////////////////////////////////////////////////////////-->
<?php include_once("./inc/footer-admin.php"); ?>