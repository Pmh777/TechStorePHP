<?php IDEA:
require_once('/xampp/htdocs/TechStorePHP/config/db.class.php');
class Product
{
  public $product_id;
  public $category_id;
  public $brand_id;
  public $name;

  public function __construct($product_id, $category_id, $brand_id, $name)
  {
    $this->product_id = $product_id;
    $this->category_id = $category_id;
    $this->brand_id = $brand_id;
    $this->name = $name;
  }
  
  public static function list_product()
  {
    $db = new Db();
    $sql = "SELECT * FROM product";
    $result = $db->select_to_array($sql);
    return $result;
  }
  public function createProduct()
  {
    $db = new Db();
    $sql = "INSERT INTO product(product_id, category_id, brand_id, name) 
    VALUES ('$this->product_id', '$this->category_id', '$this->brand_id', '$this->name')";
    $result = $db->query_execute($sql);
    return $result;
  }

  public static function updateProduct(int $id, int $category_id, int $brand_id, string $name)
  {
    $db = new Db();
    $sql = "UPDATE product
            SET category_id='$category_id', brand_id='$brand_id', name='$name'
            WHERE product_id='$id'";
    $result = $db->query_execute($sql);
    return $result;
  }

  public static function deleteProduct(int $id)
  {
    $db = new Db();
    $sql = "DELETE FROM product WHERE product_id='$id'";
    $result = $db->query_execute($sql);
    return $result;
  }

  public static function findProduct(int $id)
  {
    $db = new Db();
    $sql = "SELECT * FROM product WHERE product_id='$id'";
    $result = $db->select_to_object($sql);
    return $result;
  }

}