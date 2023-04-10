<?php
function construct()
{
  load_model('index');
  load('helper', 'url');
}

function indexAction()
{
  $list_buy = get_list_buy_cart();
  $data['list_buy'] = $list_buy;
  load_view('index', $data);
}

function addAction()
{
  add_cart();
  redirect("?mod=cart&controller=index&action=index");
}

function deleteAction()
{
  $id = (int) $_GET['id'];
  delete_cart($id);
  redirect("?mod=cart&controller=index&action=index");
}

function delete_allAction()
{
  delete_all_cart();
  redirect("?mod=cart&controller=index&action=index");
}

function updateAction()
{
  if (isset($_POST['btn-update-cart'])) {
    update_cart($_POST['qty']);
    redirect("?mod=cart&controller=index&action=index");
  }
}

function checkoutAction()
{
  $list_buy = get_list_buy_cart();
  $data['list_buy'] = $list_buy;
  load_view('checkout', $data);
}

function orderAction()
{
  global $fullname, $email, $address, $cellphone, $note, $created_at;
  if (isset($_POST['btn-order'])) {
    $error = array();

    if (!empty($_SESSION['user']['id'])) {
      $id_customer = $_SESSION['user']['id'];
    } else {
      $id_customer = 0;
    }

    if (empty($_POST['fullname'])) {
      $error['fullname'] = "Bạn hãy nhập họ và tên!";
    } else {
      $fullname = $_POST['fullname'];
    }

    if (empty($_POST['email'])) {
      $error['email'] = "Bạn hãy email!";
    } else {
      $email = $_POST['email'];
    }

    if (empty($_POST['address'])) {
      $error['address'] = "Bạn hãy địa chỉ!";
    } else {
      $address = $_POST['address'];
    }

    if (empty($_POST['cellphone'])) {
      $error['cellphone'] = "Bạn hãy số điện thoại!";
    } else {
      $cellphone = $_POST['cellphone'];
    }

    $note = $_POST['note'];

    $created_at = date('Y-m-d H:i:s');

    //Lấy tổng số lượng sản phẩm trong giỏ hàng
    $total_qty = get_total_num();

    //Lấy tổng số tiền phải trả trong giỏ hàng
    $total_price = get_total_cart();

    if (empty($error)) {
      //Lưu thông tin về người đặt hàng vào mảng $data 
      $data = array(
        'id_customer' => $id_customer,
        'name_customer' => $fullname,
        'email_customer' => $email,
        'phone_customer' => $cellphone,
        'address_customer' => $address,
        'note_customer' => $note,
        'total_qty' => $total_qty,
        'total_price' => $total_price,
        'created_at' => $created_at
      );

      //Gọi hàm thêm sản phẩm vào đơn hàng
      add_order($data);

      //Lấy ID đơn hàng vừa tạo bằng hàm get_id_order 
      $id_order = get_id_order($fullname, $created_at);
      $id = $id_order['id_order'];

      //Lấy thông tin sản phầm trong giỏ hàng bằng hàm get_list_buy_cart
      $list_buy = get_list_buy_cart();
      //Duyệt mảng để lấy các thông tin sản phẩm 
      foreach ($list_buy as $item) {
        $id_product = $item['id'];
        $name_product = $item['nameProduct'];
        $img_product = $item['imgProduct'];
        $qty_product = $item['qty'];
        $price_product = $item['price'];
        $sub_total = $item['sub_total'];

        //Lưu thông tin vào mảng $data
        $data = array(
          'id_order' => $id,
          'id_customer' => $id_customer,
          'name_customer' => $fullname,
          'id_product' => $id_product,
          'name_product' => $name_product,
          'img_product' => $img_product,
          'qty_product' => $qty_product,
          'price_product' => $price_product,
          'sub_total' => $sub_total
        );

        //Gọi hàm thêm chi tiết đơn hàng
        add_detail_order($data);
      }

      //Hủy session và chuyển hướng
      unset($_SESSION['cart']);
      redirect('?mod=cart&controller=index&action=show_orders');
    }
  }
}

function show_ordersAction()
{
  load_view('show_orders');
}
