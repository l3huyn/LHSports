<?php
function get_list_product() {
  $result = db_fetch_array("SELECT * FROM product ORDER BY `createdAtProduct` DESC");
  return $result;
}

function add_product($data) {
  return db_insert('product', $data);
}

function  update_product($data, $id) {
  return db_update('product', $data, "`id` = '{$id}'");
}

function get_product_by_id($id)
{
  $item = db_fetch_row("SELECT * FROM `product` WHERE `id` = {$id}");
  return $item;
}


function delete_product_by_id($id_product) {
  $result = db_query("DELETE FROM product WHERE `id` = '$id_product'");
  return $result;
}

function get_list_product_by_filter($filter) {
  $result = db_fetch_array("SELECT * FROM `product` WHERE `typeProduct` = '{$filter}'");
  return $result;
}

function get_product_by_key_search($key_search) {
  $result = db_fetch_array("SELECT * FROM `product` WHERE `nameProduct` like '%" . $key_search . "%'");
  return $result;
}

function  get_list_available_product() {
  $result = db_fetch_array("SELECT * FROM product WHERE `statusProduct` = 'Còn hàng'");
  return $result;
}

function  get_list_unavailable_product() {
  $result = db_fetch_array("SELECT * FROM product WHERE `statusProduct` = 'Hết hàng'");
  return $result;
}

function get_number_available_product() {
  return db_fetch_array("SELECT COUNT(*) as COUNT FROM product WHERE `statusProduct` = 'Còn hàng'");
}

function get_number_unavailable_product() {
  return db_fetch_array("SELECT COUNT(*) as COUNT FROM product WHERE `statusProduct` = 'Hết hàng'");
}


