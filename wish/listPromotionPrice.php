<?php
public static function list_product(){
  $db = new Db();
  $sql = "SELECT * FROM products where promotionprice > 0";
  $result = $db->select_to_array($sql);
  return $result;
}

 ?>
