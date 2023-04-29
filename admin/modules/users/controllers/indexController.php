<?php

function construct()
{
    load_model('index');
}

function indexAction()
{
    $list_user = get_list_user();
    $data['list_user'] = $list_user;
    load_view('index', $data);
}

function addAction()
{
    load_view('add');
}

function editAction()
{
    global $error;
    $id = $_GET['id'];
    if (isset($_POST['btn-update-user'])) {
        $error = array();

        //Check name user
        if (!empty($_POST['name'])) {
            $name = $_POST['name'];
        } else {
            $error['name'] = "(*) Không bỏ trống tên user";
        }

        //Check email user
        if (!empty($_POST['email'])) {
            $email = $_POST['email'];
        } else {
            $error['email'] = "(*) Không bỏ trống email";
        }

        //Check email user
        if (!empty($_POST['password'])) {
            $password = md5($_POST['password']);
        } else {
            $error['password'] = "(*) Không bỏ trống mật khẩu";
        }

        //Check cellphone user
        if (!empty($_POST['cellphone'])) {
            $cellphone = $_POST['cellphone'];
        } else {
            $error['cellphone'] = "(*) Không bỏ trống mật khẩu";
        }

        //Check cellphone user
        if (!empty($_POST['authority'])) {
            $authority = $_POST['authority'];
        } else {
            $error['authority'] = "(*) Không bỏ trống nhóm quyền";
        }

        if (empty($error)) {
            $data = array(
                'name' => $name,
                'emailUser' => $email,
                'password' => $password,
                'cellphone' => $cellphone,
                'authority' => $authority,
            );

            update_user($data, $id);
            redirect("?mod=users&controller=index&action=index");
        }
    }
    load_view('edit');
}

function deleteAction()
{
    if (isset($_GET['id'])) {
        $id_user = $_GET['id'];
        delete_user($id_user);
        redirect("?mod=users&controller=index&action=index");
    }
}

function filterAction()
{
    if (isset($_POST['btn-filter-user'])) {
        if (!empty($_POST['filter-user'])) {
            $filter_user = $_POST['filter-user'];
            $list_user = get_list_user_by_filter($filter_user);
            $data['list_user'] = $list_user;
            load_view('filter', $data);
        } else {
            redirect("?mod=users&controller=index&action=index");
        }
    }
}

function searchAction()
{
    if (isset($_POST['btn-search-user'])) {
        if (!empty($_POST['key-search'])) {
            $key_search = $_POST['key-search'];
            $list_user = get_user_by_key_search($key_search);
            $data['list_user'] = $list_user;
            load_view('search', $data);
        } else {
            redirect("?mod=users&controller=index&action=index");
        }
    }
}
