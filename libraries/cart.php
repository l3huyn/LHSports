<?php
//Hàm thêm một sản phầm vào giỏ hàng
function add_cart()
{
  #Lấy dữ liệu của sản phẩm theo $id trên DB xuống
  $id = (int) $_GET['id'];
  $items = get_item_by_id($id);
  $qty = 1;
  if (isset($_SESSION['cart']['buy']) && array_key_exists($id, $_SESSION['cart']['buy'])) {
    $qty = $_SESSION['cart']['buy'][$id]['qty'] + 1;
  }
  $_SESSION['cart']['buy'][$id] = array(
    'id' => $items['id'],
    'imgProduct' => $items['imgProduct'],
    'nameProduct' => $items['nameProduct'],
    'brand' => $items['brand'],
    'price' => $items['price'],
    'qty' => $qty,
    'sub_total' => $items['price'] * $qty
  );
  #cập nhật hóa đơn
  update_info_cart();
}


//Hàm xóa một sản phầm ra khỏi giỏ hàng 
function delete_cart($id)
{
  if (isset($_SESSION['cart'])) {
    # Xóa sản phẩm có $id trong giỏ hàng
    if (!empty($id)) {
      unset($_SESSION['cart']['buy'][$id]);
      #cập nhật hóa đơn
      update_info_cart();
    } else {
      unset($_SESSION['cart']);
    }
  }
}

//Hàm xóa toàn bộ giỏ hàng
function delete_all_cart()
{
  if (isset($_SESSION['cart'])) {
    unset($_SESSION['cart']);
  }
}


//Hàm lấy danh sách sản phẩm đã mua
function get_list_buy_cart()
{
  if (isset($_SESSION['cart'])) {
    return $_SESSION['cart']['buy'];
  }
  return FALSE;
}


//Hàm lấy danh sách đơn hàng đã mua
function get_list_buy_order()
{
  if (isset($_SESSION['order'])) {
    return $_SESSION['order']['info'];
  }
  return FALSE;
}


//Hàm cập nhật giỏ hàng
function update_info_cart()
{
  if (isset($_SESSION['cart'])) {
    $num_order = 0;
    $total = 0;
    foreach ($_SESSION['cart']['buy'] as $item) {
      $num_order += $item['qty'];
      $total += $item['sub_total'];
    }

    $_SESSION['cart']['info'] = array(
      'num_order' => $num_order,
      'total' => $total
    );
  }
}

//Hàm lấy tổng giỏ hàng 
function get_total_cart()
{
  if (isset($_SESSION['cart'])) {
    return $_SESSION['cart']['info']['total'];
  }
  return FALSE;
}

//Hàm lấy tổng số lượng giỏ hàng 
function get_total_num()
{
  if (isset($_SESSION['cart'])) {
    return $_SESSION['cart']['info']['num_order'];
  }
  return FALSE;
}

//Hàm cập nhật số lượng trong giỏ hàng
function update_cart($qty)
{
  foreach($qty as $id => $new_qty) {
    $_SESSION['cart']['buy'][$id]['qty'] = $new_qty;
    $_SESSION['cart']['buy'][$id]['sub_total'] = $new_qty * $_SESSION['cart']['buy'][$id]['price'];
    update_info_cart();
}
}

//Hàm lấy tổng số sản phẩm đã mua
function get_num_order_cart()
{
  if (isset($_SESSION['cart'])) {
    return $_SESSION['cart']['info']['num_order'];
  }
  return FALSE;
}
