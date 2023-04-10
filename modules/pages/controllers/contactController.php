<?php 
function construct() {
  load_model('index');
}

function indexAction() {
  load_view('contact');
}

function contactAction() {
  if(isset($_POST['btn-post'])) {
    $error = array();

    if(!empty($_POST['fullname'])) {
      $fullname = $_POST['fullname'];
    } else {
      $error['fullname'] = "Không được bỏ trống tên";
    }

    if(!empty($_POST['email'])) {
      $email = $_POST['email'];
    } else {
      $error['email'] = "Không được bỏ trống email";
    }

    if(!empty($_POST['phone'])) {
      $phone = $_POST['phone'];
    } else {
      $error['phone'] = "Không được bỏ trống số điện thoại";
    }

    if(!empty($_POST['content'])) {
      $content = $_POST['content'];
    } else {
      $error['content'] = "Không được bỏ trống nội dung";
    }

    if(empty($error)) {
      $data = array(
        'nameContact' => $fullname,
        'emailContact' => $email,
        'phoneContact' => $phone,
        'content' => $content
      );

      post_contact($data);
    }
    load_view('contact');
  }
  
}

























?>