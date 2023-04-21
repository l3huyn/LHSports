<?php

function get_list_news_by_admin() {
  $result = db_fetch_array("SELECT * FROM news");
  return $result;
}

function add_news($data) {
  return db_insert('news', $data);
}

function delete_news_by_id($id_news) {
  $result = db_query("DELETE FROM news WHERE `id_news` = '$id_news'");
  return $result;
}

function get_news_by_id($id_news) {
  $result = db_fetch_row("SELECT * FROM news WHERE `id_news` = '$id_news'");
  return $result;
}

function update_news($data, $id_news) {
  return db_update('news', $data, "`id_news` = '{$id_news}'");
}

function get_public_news() {
  $result = db_fetch_array("SELECT * FROM news WHERE `status_news` = 'Công khai'");
  return $result;
}

function get_pending_approval_news() {
  $result = db_fetch_array("SELECT * FROM news WHERE `status_news` = 'Chờ duyệt'");
  return $result;
}

function get_number_public_news() {
  return db_fetch_array("SELECT COUNT(*) as COUNT FROM news WHERE `status_news` = 'Công khai'");
}

function get_number_pending_approval_news() {
  return db_fetch_array("SELECT COUNT(*) as COUNT FROM news WHERE `status_news` = 'Chờ duyệt'");
}


?>

