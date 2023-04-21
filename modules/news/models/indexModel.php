<?php 
function get_list_news() {
  $result = db_fetch_array("SELECT * FROM news");
  return $result;
}

function get_news_by_id($id_news) {
  $result = db_fetch_row("SELECT * FROM news WHERE `id_news` = '$id_news'");
  return $result;
}
?>