<?php IDEA:
require_once('/xampp/htdocs/TechStorePHP/config/db.class.php');
class Storehouse
{
  public $product_id ;
  public $color_id;
  public $price;
  public $quantity;
  public $image ;
  public $description;
  public $status;
  public $create_at;

  public function __construct($product_id , $color_id, $price, $quantity, $image, $description, $status, $create_at)
  {
    $this->product_id  = $product_id ;
    $this->color_id = $color_id;
    $this->price = $price;
    $this->quantity = $quantity;
    $this->image  = $image ;
    $this->description = $description;
    $this->status = $status;
    $this->create_at = $create_at;
  }
  
  public static function list_storehouse()
  {
    $db = new Db();
    $sql = "SELECT * FROM storehouse" ;
    $result = $db->select_to_array($sql);
    return $result;
  }
  // public function createBrand()
  // {

  //   $date = date("Y-m-d H:i:s");
  //   $db = new Db();
  //   $sql = "INSERT INTO brand (name, status, created_at) 
  //   VALUES ('$this->name', '$this->status','$date')";
  //   $result = $db->query_execute($sql);
  //   return $result;
  // }
  // public static function updateBrand(int $brand_id, string $name, int $status, string $created_at)
  // {
  //   $date = date("Y-m-d H:i:s");
  //   $db = new Db();
  //   $sql = "UPDATE brand
  //           SET name='$name', status='$status', created_at='$date'
  //           WHERE brand_id='$brand_id'";
  //   $result = $db->query_execute($sql);
  //   return $result;
  // }

  // public static function deleteBrand(int $brand_id)
  // {
  //   $db = new Db();
  //   $sql = "DELETE FROM brand WHERE brand_id='$brand_id'";
  //   $result = $db->query_execute($sql);
  //   return $result;
  // }

  // public static function findBrand(int $brand_id)
  // {
  //   $db = new Db();
  //   $sql = "SELECT * FROM brand WHERE brand_id='$brand_id'";
  //   $result = $db->select_to_object($sql);
  //   return $result;
  // }

}