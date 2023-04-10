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
