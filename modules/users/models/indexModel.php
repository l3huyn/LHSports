<?php
//Hàm kiểm tra đăng nhập
function check_login($username, $password)
{
    $check_user = db_num_rows("SELECT * FROM `users` WHERE `username` = '{$username}' AND `password` = '{$password}'");
    //Nếu số dòng lớn hơn 0 chứng tỏ tồn tại
    if ($check_user > 0) {
        return TRUE;
    } else {
        return FALSE;
    }
}

//Hàm lấy tất cả thông tin user sau khi đăng nhập thành công
function get_info_user($username, $password) {
    $result = db_fetch_row("SELECT * FROM `users` WHERE `username` = '{$username}' AND `password` = '{$password}'");
    return $result;
}


//--Function add user in DB
function add_user($data) {
    return db_insert('users', $data);
}


//Hàm cập nhật thông tin user 
function update_user($data, $id) {
    return db_update('users', $data, "`id` = '{$id}'");
}

//Hàm lấy thông tin user
function get_user_by_id($id) {
    $result = db_fetch_row("SELECT * FROM `users` WHERE `id` = '{$id}'");
    return $result;
}


//-- Fucntion check user exits 
function user_exits($username, $email) {
    $check_user = db_num_rows("SELECT * FROM `users` WHERE `username` = '{$username}' OR `emailUser` = '{$email}'");
    if ($check_user > 0) {
        return TRUE;
    } return FALSE;
}


//-- Fuction active user by active token
function active_user($active_token) {
    return db_update('users', array('is_active' => 1), "`active_token` = '{$active_token}'");
}


//-- Fuction check active token in DB
function check_active_token($active_token) {
    $check_token = db_num_rows("SELECT * FROM `users` WHERE `active_token` = '{$active_token}' AND `is_active` = '0'");
    if ($check_token > 0) {
        return TRUE;
    } return FALSE;
}


//-- Function check email in DB
function check_email($email) {
    $check_email = db_num_rows("SELECT * FROM `users` WHERE `emailUser` = '{$email}'");
    if ($check_email > 0) {
        return TRUE;
    } else {
        return FALSE;
    }
}

//-- Function update reset token in DB
function update_reset_token($data, $email) {
    db_update('users', $data, "`emailUser` = '{$email}'");
}

//-- Function check reset token in DB
function check_reset_token($reset_token) {
    $check_reset_token = db_num_rows("SELECT * FROM `users` WHERE `reset_token` = '{$reset_token}'");
    if ($check_reset_token > 0) {
        return TRUE;
    } else {
        return FALSE;
    }
}

//-- Function update password in DB
function update_pass($data, $reset_token){
    db_update('users', $data, "`reset_token` = '{$reset_token}'");
}