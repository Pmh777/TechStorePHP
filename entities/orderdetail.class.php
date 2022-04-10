<?php IDEA:
require_once('/xampp/htdocs/TechStorePHP/config/db.class.php');
class Orderdetail
{
  public $product_id ;
  public $orders_id;
  public $color_id;
  public $quantity;


  public function __construct($product_id, $orders_id, $color_id, $quantity)
  {
    $this->product_id = $product_id;
    $this->orders_id = $orders_id;
    $this->color_id = $color_id;
    $this->quantity = $quantity;
  }
  
  public function createOrderdetail()
  {

    $db = new Db();
    $sql = "INSERT INTO orderdetail (product_id, orders_id, color_id, quantity) 
    VALUES ('$this->product_id', '$this->orders_id','$this->color_id','$this->quantity')";
    $result = $db->query_execute($sql);
    return $result;
  }
}