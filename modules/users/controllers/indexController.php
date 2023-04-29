<?php
function construct()
{
    load_model('index');
    load('helper', 'url');
    load('lib', 'email');
}

function loginAction()
{
    global $error, $username, $password;
    if (isset($_POST['btn-login'])) {
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


function regAction() {
    global $error, $username, $password, $emailUser, $name;
    if (isset($_POST['btn-reg'])) {
        $error = array();

        #Check name
        if (empty($_POST['name'])) {
            $error['name'] = "(*) Không được để trống họ và tên";
        } else {
            $name = $_POST['name'];
        }

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

        #Check emailUser
        if (empty($_POST['emailUser'])) {
            $error['emailUser'] = "(*) Không được để trống email";
        } else {
            if (!is_email($_POST['emailUser'])) {
                $error['emailUser'] = "(*) Email không hợp lệ";
            } else {
                $emailUser = $_POST['emailUser'];
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

        //Add authority 
        $authority = 'Customer';

        #Kết luận
        if (empty($error)) {
            if (!user_exits($username, $emailUser)) {
                #Biến active_token được gán với chuỗi mã hóa md5, phía trong md5 sẽ là tên đăng nhập nối với thời gian hiện tại
                $active_token = md5($username . time());

                #Save user's information in array $data
                $data = array(
                    'authority' => $authority,
                    'name' => $name,
                    'username' => $username,
                    'emailUser' => $emailUser,
                    'password' => $password,
                    'active_token' => $active_token
                );

                #Call to function "add_user"
                add_user($data);

                #SEND MAIL TO USER IN ORDER TO ACTIVE ACCOUNT
                $link_active = base_url("?mod=users&action=active&active_token={$active_token}");
                $content = "<p>Chào {$name}!</p>
                            <p>Vui lòng click vào đường link này để kích hoạt tài khoản: {$link_active}</p>
                            <p>Nếu bạn không đăng ký tài khoản, vui lòng bỏ qua email này!</p>
                            <p>Team Support LHSports</p>";
                #Gọi đến hàm send_mail để gửi active_token đến người dùng
                // send_mail($emailUser, "Le Huynh", 'ACTIVE YOUR ACCOUNT', $content);
                send_mail($emailUser, "Lê Huynh", "Kích hoạt tài khoản LHSPORTS", $content);

//                redirect("?mod=users&action=login");
            } else {
                $error['account'] = "Email hoặc tên đăng nhập đã tồn tại";
            }
        }
    }
    load_view('reg');
}

function activeAction() {
    $active_token = $_GET['active_token'];
    $link_login = base_url("?mod=users&action=login");
    if (check_active_token($active_token)) {
        active_user($active_token);
        echo "Bạn đã kích hoạt thành công, vui lòng click vào link sau để <a href='{$link_login}'>Đăng nhập</a>";
    } else {
        echo "Yêu cầu kích hoạt không hợp lệ hoặc tài khoản đã được kích hoạt trước đó!";
    }
}



function profileAction() {
    global $error;
    $id = $_SESSION['user']['id'];
    if(isset($_POST['btn-update-profile'])) {
        $error = array();

        if (isset($_FILES['imgUser']['name'])) {
            $imgUser = $_FILES['imgUser']['name'];
            $pathType = pathinfo($_FILES['imgUser']['name'], PATHINFO_EXTENSION);
            $imgUser = "ImageUser" . rand(000, 999) . '.' . $pathType;

            $diachinguon = $_FILES['imgUser']['tmp_name'];
            $diachidich = "public/img-user/" . $imgUser;
            //Tải hình ảnh lên
            $upload = move_uploaded_file($diachinguon, $diachidich);
            if ($upload == false) {
                $error['imgUser'] = "(*) Chưa tải được hình ảnh";
            }
        }

        if(!empty($_POST['name'])) {
            $name = $_POST['name'];
        } else {
            $error['name'] = "(*) Không được để trống họ và tên";
        } 

        if(!empty($_POST['cellphone'])) {
            $cellphone = $_POST['cellphone'];
        } else {
            $error['cellphone'] = "(*) Không được để trống số điện thoại";
        } 

        if(!empty($_POST['email'])) {
            $email = $_POST['email'];
        } else {
            $error['email'] = "(*) Không được để trống email";
        }

        if(!empty($_POST['address'])) {
            $address = $_POST['address'];
        } else {
            $error['address'] = "(*) Không được để trống địa chỉ";
        } 

        if(!empty($_POST['desc'])) {
            $desc = $_POST['desc'];
        } 

        if(empty($error)) {
            $data = array(
                'imgUser' => $imgUser,
                'name' => $name,
                'cellphone' => $cellphone,
                'emailUser' => $email,
                'addressUser' => $address,
                'descUser' => $desc
            );

            update_user($data, $id);
            redirect("?mod=users&controller=index&action=profile");
        }
    }
    load_view('profile');
}



function logoutAction()
{
    #Xử lý logout 
    unset($_SESSION['user']);

    #Chuyển hướng người dùng qua login 
    redirect();
}

