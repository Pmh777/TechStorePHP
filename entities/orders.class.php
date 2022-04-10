<?php IDEA:
require_once('/xampp/htdocs/TechStorePHP/config/db.class.php');
class Orders
{
  public $others_id ;
  public $customer_id;
  public $address;
  public $note;

  public $total;
  public $order_code;
  public $status;
  public $create_at;
  public $employee_id;

  public function __construct($others_id,$customer_id,$address,$note,$total,$order_code,$status,$create_at,$employee_id)
  {
    $this->others_id = $others_id;
    $this->customer_id = $customer_id;
    $this->address = $address;
    $this->note = $note;
    $this->total = $total;
    $this->order_code = $order_code;
    $this->status = $status;
    $this->created_at = $create_at;
    $this->employee_id = $employee_id;
  }
  
  public function createOrder()
  {

    $date = date("Y-m-d H:i:s");
    $db = new Db();
    $sql = "INSERT INTO orders (customer_id, address, note, total, order_code, status, created_at, employee_id) 
    VALUES ('$this->customer_id', '$this->address','$this->note','$this->total','$this->order_code',1,'$date','$this->employee_id')";
    $result = $db->query_execute($sql);
    return $result;
  }
  public static function getRecentOrder()
  {
    $db = new Db();
    $sql = "select *from orders ORDER BY orders_id DESC LIMIT 1;";
    $result = $db->select_to_object($sql);
    return $result;
  }
}