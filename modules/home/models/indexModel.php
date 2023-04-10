<?php 
function get_product_by_popularity() {
  $result = db_fetch_array("SELECT * FROM `product` WHERE `popularity` = 'Có'");
  return $result;
}
?>