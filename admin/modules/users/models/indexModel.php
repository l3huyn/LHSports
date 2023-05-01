<?php
function get_list_user() {
  $result = db_fetch_array("SELECT * FROM users");
  return $result;
}

function add_user($data) {
  return db_insert('users', $data);
}

function delete_user($id_user) {
  return db_query("DELETE FROM users WHERE `id` = $id_user");
}

function get_user_by_id($id) {
  $result = db_fetch_row("SELECT * FROM users WHERE `id` = $id");
  return $result;
}

function update_user($data, $id) {
  return db_update('users', $data, "`id` = '{$id}'");
}

function get_list_user_by_filter($filter_user) {
  $result = db_fetch_array("SELECT * FROM `users` WHERE `authority` = '{$filter_user}'");
  return $result;
}

function get_user_by_key_search($key_search) {
  $result = db_fetch_array("SELECT * FROM `users` WHERE `name` like '%" . $key_search . "%'");
  return $result;
}

function check_login_admin($username, $password)
{
    $check_user = db_num_rows("SELECT * FROM `users` WHERE `username` = '{$username}' AND `password` = '{$password}' AND `authority` = 'Admintrator'");
    //Nếu số dòng lớn hơn 0 chứng tỏ tồn tại
    if ($check_user > 0) {
        return TRUE;
    } else {
        return FALSE;
    }
}

function get_info_admin($username, $password) {
  $result = db_fetch_row("SELECT * FROM `users` WHERE `username` = '{$username}' AND `password` = '{$password}' AND `authority` = 'Admintrator'");
  return $result;
}

function get_admin_by_id($id) {
  $result = db_fetch_row("SELECT * FROM `users` WHERE `id` = '{$id}' AND `authority` = 'Admintrator'");
  return $result;
}
