<?php
function construct()
{
    load('helper', 'url');
    load_model('index');
}

function loginAction()
{
    global $error, $username, $password;
    if (isset($_POST['btn-login'])) {
        $error = array();
        #Check username
        if (empty($_POST['username'])) {
            $error['username'] = "Không được để trống tên đăng nhập";
        } else {
            if (!is_username($_POST['username'])) {
                $error['username'] = "Tên đăng nhập không hợp lệ";
            } else {
                $username = $_POST['username'];
            }
        }

        #Check password
        if (empty($_POST['password'])) {
            $error['password'] = "Không được để trống mật khẩu";
        } else {
            if (!is_password($_POST['password'])) {
                $error['password'] = "Mật khẩu không hợp lệ";
            } else {
                $password = $_POST['password'];
            }
        }

        #Kết luận
        if (empty($error)) {
            if (check_login($username, $password)) {
                #Lưu trữ phiên đăng nhập
                $info_user = get_info_user($username, $password);

                #Lưu trữ các thông tin user bằng SESSION
                $_SESSION['user']['id'] = $info_user['id'];
                $_SESSION['user']['username'] = $info_user['username'];
                $_SESSION['user']['name'] = $info_user['name'];
                $_SESSION['user']['cellphone'] = $info_user['cellphone'];
                $_SESSION['user']['email'] = $info_user['emailUser'];
                $_SESSION['user']['address'] = $info_user['addressUser'];
                $_SESSION['user']['desc'] = $info_user['descUser'];
                $_SESSION['user']['imgUser'] = $info_user['imgUser'];

                #Chuyển hướng
                redirect();
            } else {
                $error['account'] = "Tên đăng nhập hoặc mật khẩu không tồn tại";
            }
        }
    }
    load_view('login');
}

function regAction()
{
    load_view('reg');
}

function profileAction() {

    load_view('profile');
}

function logoutAction()
{
    #Xử lý logout 
    unset($_SESSION['user']);

    #Chuyển hướng người dùng qua login 
    redirect();
}

