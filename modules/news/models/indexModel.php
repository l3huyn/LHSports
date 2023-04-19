<?php 
function get_list_news() {
  $result = db_fetch_array("SELECT * FROM news");
  return $result;
}
?>