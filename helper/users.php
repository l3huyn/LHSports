<?php

//Trả về true nếu đã login 
function is_login() {
    if(isset($_SESSION['is_login'])) {
        return TRUE;
    } return FALSE;
}

//Trả về username của người login
function user_login() {
    if(!empty($_SESSION['user_login'])) {
        return $_SESSION['user_login'];
    } 
    return FALSE;
}

//Hàm hiển thị tên fullname khi đã đăng nhập
function info_user($field = 'id') {
    global $list_users;
    if(isset($_SESSION['is_login'])) {
        foreach($list_users as $user) {
            if($_SESSION['user_login'] == $user['username']) {
                if(array_key_exists($field, $user)) {
                    return $user[$field];
                }
            }
        }
    }
    return false; 
}

?>
