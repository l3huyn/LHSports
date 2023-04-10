<?php

//-- Hàm kiểm tra định dạng username
function is_username($username) {
    $partten = "/^[A-Za-z0-9_\.]{6,32}$/";
    if (!preg_match($partten, $username, $matchs)) {
        return FALSE;
    } return TRUE;
}

//-- Hàm kiểm tra định dạng password
function is_password($password) {
    $partten = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
    if (!preg_match($partten, $password, $matchs)) {
        return FALSE;
    } return TRUE;
}

//-- Hàm kiểm tra định dạng email
function is_email($email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return FALSE;
    } return TRUE;
}


//-- Hàm hiển thị lỗi - form_error()
function form_error($label_field) {
    global $error;
    if (!empty($error[$label_field]))
        return "<p class='error'>{$error[$label_field]}</p>";
}

//-- Hàm set dữ liệu - set_value()
function set_value($label_field) {
    global $$label_field;
    if(!empty($$label_field)) return $$label_field;
}

?>

