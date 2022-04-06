<?php IDEA:
require_once('/xampp/htdocs/TechStorePHP/config/db.class.php');
class Category
{
  public $category_id;
  public $name;
  public $status;
  public $createAt;

  public function __construct($category_id, $name, $status, $createAt)
  {
      $this->category_id = $category_id;
      $this->name = $name;
      $this->status = $status;
      $this->createAt = $createAt;
  }

  public static function list_category()
  {
      $db = new Db();
      $sql = "SELECT * FROM category";
      $result = $db->select_to_array($sql);
      return $result;
  }

  public function createCategory()
  {
    $date = date("Y-m-d H:i:s");
    $db = new Db();
    $sql = "INSERT INTO category(category_id, name, status, createAt) 
    VALUES ('$this->category_id', '$this->name', '$this->status', '$this->date')";
    $result = $db->query_execute($sql);
    return $result;
  }

  public static function updateCategory(int $id, string $name, string $status)
  {
      $db = new Db();
      $sql = "UPDATE category
              SET name='$name', status='$status'
              WHERE category_id='$id'";
      $result = $db->query_execute($sql);
      return $result;
  }

  public static function deleteCategory(int $id)
  {
      $db = new Db();
      $sql = "DELETE FROM category WHERE category_id='$id'";
      $result = $db->query_execute($sql);
      return $result;
  }

  public static function findCategory(int $id)
  {
      $db = new Db();
      $sql = "SELECT * FROM category WHERE category_id='$id'";
      $result = $db->select_to_object($sql);
      return $result;
  }
}