<?php IDEA:
require_once('/xampp/htdocs/TechStorePHP/config/db.class.php');
class Customer
{
  public $customer_id;
  public $name;
  public $phone;
  public $birthday;
  public $gender;
  public $email;
  public $address;
  public $password;
  public $status;
  public $created_at;

  public function __construct($customer_id, $name, $phone, $birthday, $gender, $email, $address,$password, $status, $created_at)
  {
    $this->customer_id = $customer_id;
    $this->name = $name;
    $this->phone = $phone;
    $this->birthday = $birthday;
    $this->gender = $gender;
    $this->email = $email;
    $this->address = $address;
    $this->password = $password;
    $this->status = $status;
    $this->created_at = $created_at;
  }
  public function createCustomer()
  {
    $date = date("Y-m-d H:i:s");
    $db = new Db();
    $sql = "INSERT INTO customer(name, phone, birthday, gender, email, address,password,status,created_at) 
    VALUES ('$this->name', '$this->phone', '$this->birthday', '$this->gender', '$this->email', '$this->address', '$this->password', '1','$date')";
    $result = $db->query_execute($sql);
    return $result;
  }
  public function updateCustomer($id)
  {
  
 
  }
  public static function list_customer()
  {
    $db = new Db();
    $sql = "SELECT * FROM customer";
    $result = $db->select_to_array($sql);
    return $result;
  }

}