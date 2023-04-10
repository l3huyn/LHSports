<?php
function get_list_product()
{
  $result = db_fetch_array("SELECT * FROM `product`");
  return $result;
}

function get_product_by_id($id)
{
  $item = db_fetch_row("SELECT * FROM `product` WHERE `id` = {$id}");
  return $item;
}

function search_product($key_search) {
  $result = db_fetch_array("SELECT * FROM `product` WHERE `nameProduct` like '%" . $key_search . "%'");
  return $result;
}

function get_list_product_by_cat($type) {
  $result = db_fetch_array("SELECT * FROM `product` WHERE `typeProduct` = '{$type}'");
  return $result;
}

function get_list_product_order_by_increase() {
  $result = db_fetch_array("SELECT * FROM `product` ORDER BY price");
  return $result;
}

function get_list_product_order_by_decrease() {
  $result = db_fetch_array("SELECT * FROM `product` ORDER BY price DESC");
  return $result;
}

function  get_list_product_by_cat_increase($type) {
  $result = db_fetch_array("SELECT * FROM `product` WHERE `typeProduct` = '{$type}' ORDER BY price");
  return $result;
}

function  get_list_product_by_cat_decrease($type) {
  $result = db_fetch_array("SELECT * FROM `product` WHERE `typeProduct` = '{$type}' ORDER BY price DESC");
  return $result;
}
