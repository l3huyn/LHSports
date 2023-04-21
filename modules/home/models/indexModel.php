<?php 
function get_product_by_popularity() {
  $result = db_fetch_array("SELECT * FROM `product` LIMIT 5");
  return $result;
}

function get_list_news() {
  return db_fetch_array("SELECT * FROM `news` ORDER BY `created_at` DESC LIMIT 4");
}
?>