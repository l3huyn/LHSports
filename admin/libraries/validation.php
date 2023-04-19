<?php 
//-- Hàm hiển thị lỗi - form_error()
function form_error($label_field) {
  global $error;
  if (!empty($error[$label_field]))
      return "<p class='error'>{$error[$label_field]}</p>";
}
