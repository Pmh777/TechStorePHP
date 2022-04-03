<?php IDEA:
require_once('/xampp/htdocs/TechStorePHP/config/db.class.php');
class Banner
{
  public $id;
  public $caption;
  public $content;
  public $photo;
  public $number_order;
  public $status;
  public $create_at;

  public function __construct($id, $caption, $content, $photo, $number_order, $create_at)
  {
    $this->id = $id;
    $this->caption = $caption;
    $this->content = $content;
    $this->photo = $photo;
    $this->number_order = $number_order;
    $this->create_at = $create_at;
  }
  
  public static function list_banner()
  {
    $db = new Db();
    $sql = "SELECT * FROM banner";
    $result = $db->select_to_array($sql);
    return $result;
  }
  public function createBanner()
  {

    $file_temp = $this->picture['tmp_name'];
    $user_file = $this->picture['name'];
    $timestamp = date("Y").date("m").date("d").date("h").date("i").date("s");
    $filepath = "/admin/theme-assets/images/slider/".$user_file.$timestamp;
    if(move_uploaded_file($file_temp,$filepath)==false)
    {
      return false;
    }

    $date = date("Y-m-d H:i:s");
    $db = new Db();
    $sql = "INSERT INTO banner(caption, content, photo, number_order, status, create_at) 
    VALUES ('$this->caption', '$this->content', '$filepath', '$this->number_order','1','$date')";
    $result = $db->query_execute($sql);
    return $result;
  }
  public static function updateCustomer(int $id, string $name, string $phone, string $birthday, string $gender, string $email, string $address, string $password, string $status)
  {
    $db = new Db();
    $sql = "UPDATE customer
            SET name='$name', phone='$phone', birthday='$birthday', gender='$gender', email='$email', address='$address', password='$password', status='$status'
            WHERE customer_id='$id'";
    $result = $db->query_execute($sql);
    return $result;
  }

  public static function deleteCustomer(int $id)
  {
    $db = new Db();
    $sql = "DELETE FROM customer WHERE customer_id='$id'";
    $result = $db->query_execute($sql);
    return $result;
  }

  public static function findCustomer(int $id)
  {
    $db = new Db();
    $sql = "SELECT * FROM customer WHERE customer_id='$id'";
    $result = $db->select_to_object($sql);
    return $result;
  }

}