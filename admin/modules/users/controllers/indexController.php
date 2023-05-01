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
    global $error;
    if (isset($_POST['btn-add-admin'])) {
        $error = array();

        if (!empty($_POST['name'])) {
            $name = $_POST['name'];
        } else {
            $error['name'] = "(*) Không được để trống họ và tên";
        }

        if (!empty($_POST['username'])) {
            $username = $_POST['username'];
        } else {
            $error['username'] = "(*) Không được để trống tên đăng nhập";
        }

        if (!empty($_POST['email'])) {
            $email = $_POST['email'];
        } else {
            $error['email'] = "(*) Không được để trống email";
        }

        if (!empty($_POST['password'])) {
            $password = md5($_POST['password']);
        } else {
            $error['password'] = "(*) Không được để trống mật khẩu";
        }

        $authority = 'Admintrator';

        if (empty($error)) {
            $data = array(
                'authority' => $authority,
                'name' => $name,
                'username' => $username,
                'password' => $password,
                'emailUser' => $email
            );

            add_user($data);
            redirect("?mod=users&controller=index&action=index");
        }
    }
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

function filter_usersAction()
{
    if (isset($_GET['filter'])) {
        $filter_user = $_GET['filter'];
        $list_user = get_list_user_by_filter($filter_user);
        $data['list_user'] = $list_user;
        load_view('filter_users', $data);
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

function loginAction()
{
    global $error, $username, $password;
    if (isset($_POST['btn-login-admin'])) {
        $error = array();
        #Check username
        if (empty($_POST['username'])) {
            $error['username'] = "(*) Không được để trống tên đăng nhập";
        } else {
            if (!is_username($_POST['username'])) {
                $error['username'] = "(*) Tên đăng nhập không hợp lệ";
            } else {
                $username = $_POST['username'];
            }
        }

        #Check password
        if (empty($_POST['password'])) {
            $error['password'] = "(*) Không được để trống mật khẩu";
        } else {
            if (!is_password($_POST['password'])) {
                $error['password'] = "(*) Mật khẩu không hợp lệ";
            } else {
                $password = md5($_POST['password']);
            }
        }

        #Kết luận
        if (empty($error)) {
            if (check_login_admin($username, $password)) {
                #Lưu trữ phiên đăng nhập
                $_SESSION['is_login'] = true;

                #Lưu trữ các thông tin user bằng SESSION
                $info_admin = get_info_admin($username, $password);
                $_SESSION['admin']['id'] = $info_admin['id'];
                $_SESSION['admin']['name'] = $info_admin['name'];

                #Chuyển hướng
                redirect("?mod=dashboard&controller=index&action=index");
            } else {
                $error['account'] = "Tên đăng nhập hoặc mật khẩu không tồn tại";
            }
        }
    }
    load_view('login');
}

function logoutAction()
{
    #Xử lý logout 
    unset($_SESSION['is_login']);
    unset($_SESSION['admin']);

    #Chuyển hướng người dùng qua login 
    redirect("?mod=users&controller=index&action=login");
}

function profile_adminAction()
{
    load_view('profile_admin');
}
