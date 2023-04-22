<?php
function get_list_orders()
{
  $result = db_fetch_array("SELECT * FROM orders ORDER BY `created_at` DESC");
  return $result;
}

function get_list_detail_order($id_order)
{
  $result = db_fetch_array("SELECT * FROM detail_order WHERE `id_order` = '$id_order'");
  return $result;
}

function delete_order_by_id($id_order)
{
  $result = db_query("DELETE FROM orders WHERE `id_order` = '$id_order'");
  return $result;
}

function delete_detail_order_by_id($id_order)
{
  $result = db_query("DELETE FROM detail_order WHERE `id_order` = '$id_order'");
  return $result;
}

function update_order($data, $id_order)
{
  return db_update('orders', $data, "`id_order` = '{$id_order}'");
}

function get_newst_list_order() {
  $result = db_fetch_array("SELECT * FROM orders ORDER BY `created_at` DESC");
  return $result;
}

function get_oldest_list_order() {
  $result = db_fetch_array("SELECT * FROM orders ORDER BY `created_at` ASC");
  return $result;
}

function get_processing_list_order() {
  $result = db_fetch_array("SELECT * FROM orders WHERE `status_order` = 'Đang xử lý'");
  return $result;
}

function get_delivered_list_order() {
  $result = db_fetch_array("SELECT * FROM orders WHERE `status_order` = 'Đã giao'");
  return $result;
}

function get_order_by_key_search($key_search) {
  $result = db_fetch_array("SELECT * FROM `orders` WHERE `name_customer` like '%" . $key_search . "%'");
  return $result;
}
