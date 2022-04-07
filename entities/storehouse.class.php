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
    b.name as brand_name, c.name as category_name, s.price as price, s.image as image
    from product p 
    INNER JOIN category c on p.category_id = c.category_id 
    INNER JOIN storehouse s on p.product_id = s.product_id 
    INNER JOIN brand b on p.brand_id = b.brand_id";
    $result = $db->select_to_array($sql);
    return $result;
  }
  

}