<?php
function get_list_order() {
  $result = db_fetch_array("SELECT * FROM orders");
  return $result;
}

function delete_order_by_id($id_order) {
  $result = db_query("DELETE FROM orders WHERE `id_order` = '$id_order'");
  return $result;
}

function delete_detail_order_by_id($id_order) {
  $result = db_query("DELETE FROM detail_order WHERE `id_order` = '$id_order'");
  return $result;
}

function get_list_detail_order($id_order) {
  $result = db_fetch_array("SELECT * FROM detail_order WHERE `id_order` = '$id_order'");
  return $result;
}

function get_orders_success() {
  return db_fetch_array("SELECT COUNT(*) as COUNT FROM orders WHERE `status_order` = 'Đã giao'");
}

function get_orders_processing() {
  return db_fetch_array("SELECT COUNT(*) as COUNT FROM orders WHERE `status_order` = 'Đang xử lý'");
}

function get_order_cancelled() {
  return db_fetch_array("SELECT COUNT(*) as COUNT FROM orders WHERE `status_order` = 'Đã hủy'");
}

function get_total_revenue() {
  return db_fetch_array("SELECT SUM(total_price) as REVENUE FROM orders WHERE `status_order` = 'Đã giao'");
}

function update_order($data, $id_order) {
  return db_update('orders', $data, "`id_order` = '{$id_order}'");
}



?>

