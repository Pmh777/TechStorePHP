<?php IDEA:
require_once('/xampp/htdocs/TechStorePHP/config/db.class.php');
class Brand
{
  public $Brand_id;
  public $name;
  public $status;
  public $createAt;

  public function __construct($brand_id, $name, $status, $createAt)
  {
      $this->brand_id = $brand_id;
      $this->name = $name;
      $this->status = $status;
      $this->createAt = $createAt;
  }

  public static function list_Brand()
  {
      $db = new Db();
      $sql = "SELECT * FROM brand";
      $result = $db->select_to_array($sql);
      return $result;
  }

  public function createBrand()
  {
    $date = date("Y-m-d H:i:s");
    $db = new Db();
    $sql = "INSERT INTO brand(brand_id, name, status, createAt) 
    VALUES ('$this->brand_id', '$this->name', '$this->status', '$this->date')";
    $result = $db->query_execute($sql);
    return $result;
  }

  public static function updateBrand(int $id, string $name, string $status)
  {
      $db = new Db();
      $sql = "UPDATE brand
              SET name='$name', status='$status'
              WHERE brand_id='$id'";
      $result = $db->query_execute($sql);
      return $result;
  }

  public static function deleteBrand(int $id)
  {
      $db = new Db();
      $sql = "DELETE FROM brand WHERE brand_id='$id'";
      $result = $db->query_execute($sql);
      return $result;
  }

  public static function findBrand(int $id)
  {
      $db = new Db();
      $sql = "SELECT * FROM brand WHERE brand_id='$id'";
      $result = $db->select_to_object($sql);
      return $result;
  }
}