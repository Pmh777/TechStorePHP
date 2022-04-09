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
  public $create_at;

  public function __construct($product_id , $color_id, $price, $quantity, $image, $description, $create_at)
  {
    $this->product_id  = $product_id ;
    $this->color_id = $color_id;
    $this->price = $price;
    $this->quantity = $quantity;
    $this->image  = $image ;
    $this->description = $description;
    $this->create_at = $create_at;
  }
  
  public static function list_storehouse()
  {
    $db = new Db();
    $sql = "select p.product_id as product_id, p.name as product_name, c.category_id as category_id, b.brand_id as brand_id, 
    b.name as brand_name, c.name as category_name
    from 
    product p 
    INNER JOIN category c on p.category_id = c.category_id 
    INNER JOIN brand b on p.brand_id = b.brand_id ORDER BY product_id ASC";
    $result = $db->select_to_array($sql);
    return $result;
  }
  public function import_stohouse()
  {
    $date = date("Y-m-d H:i:s");
    $db = new Db();
    $sql = "INSERT INTO storehouse( product_id, color_id, price, quantity, image, description, create_at) 
    VALUES ('$this->product_id','$this->color_id',' $this->price','$this->quantity','$this->image','$this->description','$date')";
    $result = $db->query_execute($sql);
    return $result;
  }
  

}