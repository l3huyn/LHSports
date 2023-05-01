<?php 
function check_product($id) {
  $checkProduct = db_num_rows("SELECT * FROM `product` where `id` ={$id}");
  return $checkProduct;
}

function get_item_by_id($id) {
  $item = db_fetch_row("SELECT * FROM `product` where `id` ={$id}");
  if(!empty($item)){
    return $item;
  }
}

//Ham them thong tin khach hang va don hang vao DB 
function add_order($data) {
  return db_insert('orders', $data);
}


//Ham lay ID don hang 
function get_id_order($fullname, $created_at) {
  $result = db_fetch_row("SELECT * FROM `orders` WHERE `name_customer` = '$fullname' AND `created_at` = '$created_at'");
  return $result;
}

//Ham them thong tin san pham vao DB
function add_detail_order($data) {
  return db_insert('detail_order', $data);
}

//Ham lay ID detail order theo ID nguoi dung khi da dang nhap
function get_id_detail_order($id_customer){
  $result =  db_query("SELECT id_order FROM `orders` WHERE `id_customer` = '$id_customer'");
  return $result;
}

//Ham lay don hang dua vao ID 
function get_list_order($id_order, $id_customer) {
  $result = db_fetch_array("SELECT * FROM `detail_order` WHERE `id_customer` = $id_customer AND `id_order` = $id_order");
  return $result;
}

//Ham kiem tra don hang 
function check_order($id_customer) {
  $result = db_num_rows("SELECT * FROM `orders` WHERE `id_customer` = '{$id_customer}'");
  if($result > 0) {
    return TRUE;
  } else {
    return FALSE;
  }
}

//Ham kiem tra thong tin don hang 
function get_info_order($id_order, $id_customer) {
  $result = db_fetch_array("SELECT * FROM `orders` WHERE `id_order` = $id_order AND `id_customer` = $id_customer");
  return $result;
}


function check_info_user_by_id($id) {
  $result = db_num_rows("SELECT * FROM `users` WHERE `id` = '{$id}'");
  if($result > 0) {
    return TRUE;
  } else {
    return FALSE;
  }
}


?>