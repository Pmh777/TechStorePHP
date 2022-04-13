<?php IDEA:
require_once('/xampp/htdocs/jiraphp/config/db.class.php');
class Comment
{
  public $customer_id;
  public $employee_id;
  public $feedback_id;
  public $content;
  public $created_at;

  public function __construct($customer_id, $employee_id, $feedback_id, $content, $created_at)
  {
    $this->customer_id = $customer_id;
    $this->employee_id = $employee_id;
    $this->feedback_id = $feedback_id;
    $this->content = $content;
    $this->created_at = $created_at;
  }

  
  public static function list_comment()
  {
    $db = new Db();
    $sql = "SELECT * FROM comment";
    $result = $db->select_to_array($sql);
    return $result;
  }
  public function createComment()
  {

    $date = date("Y-m-d H:i:s");
    $db = new Db();
    $sql = "INSERT INTO comment(customer_id, employee_id, feedback_id, content, created_at) 
    VALUES ('$this->customer_id', '$this->employee_id','$this->feedback_id','$this->content','$date')";
    $result = $db->query_execute($sql);
    return $result;
  }

  public static function findComment(int $feedback_id)
  {
    $db = new Db();
    $sql = "SELECT * FROM comment WHERE feedback_id='$feedback_id'";
    $result = $db->select_to_array($sql);
    return $result;
  }

}