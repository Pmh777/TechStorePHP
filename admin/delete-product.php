<?php require_once("/xampp/htdocs/TechStorePHP/entities/product.class.php"); ?>
<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = Product::deleteProduct($id);
        if($result){
            echo "<script>alert('Xóa thành công');</script>";
            echo "<script>window.location.href='/TechStorePHP/admin/Product.php';</script>";
        }
        else{
            echo "<script>alert('Xóa thất bại');</script>";
            echo "<script>window.location.href='/TechStorePHP/admin/Product.php';</script>";
        }
    }
?>