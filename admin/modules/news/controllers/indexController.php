<?php

function construct()
{
    load_model('index');
}

function indexAction()
{
    $list_news_by_admin = get_list_news_by_admin();
    $data['list_news_by_admin'] = $list_news_by_admin;
    load_view('index', $data);
}

function addAction()
{
    global $error;
    if (isset($_POST['btn-add-news'])) {
        $error = array();

        //Check title news 
        if (!empty($_POST['title_news'])) {
            $title_news = $_POST['title_news'];
        } else {
            $error['title_news'] = "(*) Không được bỏ trống tiêu đề bài viết";
        }

        //Check image news 
        if (isset($_FILES['img_news']['name'])) {
            $img_news = $_FILES['img_news']['name'];
            $pathType = pathinfo($_FILES['img_news']['name'], PATHINFO_EXTENSION);
            $img_news = "News" . rand(000, 999) . '.' . $pathType;

            $diachinguon = $_FILES['img_news']['tmp_name'];
            $diachidich = "public/images/" . $img_news;
            //Tải hình ảnh lên
            $upload = move_uploaded_file($diachinguon, $diachidich);
            if ($upload == false) {
                $error['img_news'] = "(*) Chưa tải được hình ảnh";
            }
        }

        //Check short desc news
        if (!empty($_POST['short_desc_news'])) {
            $short_desc_news = $_POST['short_desc_news'];
        } else {
            $error['short_desc_news'] = "(*) Không được bỏ trống mô tả ngắn";
        }

        //Check content news
        if (!empty($_POST['content_news'])) {
            $content_news = $_POST['content_news'];
        } else {
            $error['content_news'] = "(*) Không được bỏ trống nội dung";
        }

        //Variable create time
        $created_at = date('Y-m-d H:i:s');

        //Check content news, default is 'Chờ duyệt'
        if (!empty($_POST['status_news'])) {
            $status_news = $_POST['status_news'];
        }

        if (empty($error)) {
            $data = array(
                'title_news' =>  $title_news,
                'short_desc_news' =>  $short_desc_news,
                'content_news' => $content_news,
                'created_at' => $created_at,
                'status_news' => $status_news,
                'img_news' => $img_news
            );

            //Insert in DB
            add_news($data);
            redirect("?mod=news&controller=index&action=index");
        }
    }
    load_view('add');
}


function editAction()
{
    global $error;
    $id = $_GET['id'];
    if (isset($_POST['btn-update-news'])) {
        $error = array();

        if (!empty($_POST['title'])) {
            $title = $_POST['title'];
        } else {
            $error['title'] = "(*) Không được bỏ trống tiêu đề bài viết";
        }

        if (isset($_FILES['image']['name'])) {
            $image = $_FILES['image']['name'];
            $pathType = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            $image = "News" . rand(000, 999) . '.' . $pathType;

            $diachinguon = $_FILES['image']['tmp_name'];
            $diachidich = "public/images/" . $image;
            //Tải hình ảnh lên
            $upload = move_uploaded_file($diachinguon, $diachidich);
            if ($upload == false) {
                $error['image'] = "(*) Chưa tải được hình ảnh";
            }
        }

        if (!empty($_POST['short_desc'])) {
            $short_desc = $_POST['short_desc'];
        } else {
            $error['short_desc'] = "(*) Không được bỏ trống mô tả ngắn";
        }

        if (!empty($_POST['content'])) {
            $content = $_POST['content'];
        } else {
            $error['content'] = "(*) Không được bỏ trống nội dung";
        }

        if (!empty($_POST['status'])) {
            $status = $_POST['status'];
        } else {
            $error['status'] = "(*) Không được bỏ trống nội dung";
        }

        $updated_at = date('Y-m-d H:i:s');

        if (empty($error)) {
            $data = array(
                'title_news' =>  $title,
                'short_desc_news' =>  $short_desc,
                'content_news' => $content,
                'created_at' => $updated_at,
                'status_news' => $status,
                'img_news' => $image
            );
            update_news($data, $id);
            redirect("?mod=news&controller=index&action=index");
        }
    }
    load_view('edit');
}

function deleteAction()
{
    if (isset($_GET['id'])) {
        $id_news = $_GET['id'];
        delete_news_by_id($id_news);
        redirect("?mod=news&controller=index&action=index");
    }
}

function detailAction()
{
    if (isset($_GET['id'])) {
        $id_news = $_GET['id'];
        $news_by_admin = get_news_by_id($id_news);
        $data['news_by_admin'] = $news_by_admin;
        load_view('detail', $data);
    }
}

function status_newsAction() {
    if(isset($_GET['status'])) {
        $status = $_GET['status'];

        $public = 'public';
        $pending_approval = 'pending_approval';

        if($status == $public) {
            $list_news = get_public_news();
            $data['list_news'] = $list_news;
            load_view('status_news', $data);
        } else if($status == $pending_approval) {
            $list_news = get_pending_approval_news();
            $data['list_news'] = $list_news;
            load_view('status_news', $data);
        }
    }
}
