<?php

function construct()
{
    load_model('index');
}

function indexAction()
{
    $list_product = get_list_product();
    $data['list_product'] = $list_product;
    load_view('index', $data);
}

function addAction()
{
    global $error;
    if (isset($_POST['btn-add-product'])) {
        $error = array();

        //Check name product 
        if (!empty($_POST['name_product'])) {
            $name_product = $_POST['name_product'];
        } else {
            $error['name_product'] = "(*) Không được để trống tên sản phẩm";
        }

        //Check price product 
        if (!empty($_POST['price_product'])) {
            $price_product = $_POST['price_product'];
        } else {
            $error['price_product'] = "(*) Không được để trống giá tiền";
        }

        //Check brand product 
        if (!empty($_POST['brand_product'])) {
            $brand_product = $_POST['brand_product'];
        } else {
            $error['brand_product'] = "(*) Không được để trống thương hiệu";
        }

        //Check image product
        if (isset($_FILES['image_product']['name'])) {
            $image_product = $_FILES['image_product']['name'];
            $pathType = pathinfo($_FILES['image_product']['name'], PATHINFO_EXTENSION);
            $image_product = "Product" . rand(000, 999) . '.' . $pathType;

            $diachinguon = $_FILES['image_product']['tmp_name'];
            $diachidich = "public/images/" . $image_product;
            //Tải hình ảnh lên
            $upload = move_uploaded_file($diachinguon, $diachidich);
            if ($upload == false) {
                $error['image_product'] = "(*) Chưa tải được hình ảnh";
            }
        }

        //Check detail product 
        if (!empty($_POST['detail_product'])) {
            $detail_product = $_POST['detail_product'];
        } else {
            $error['detail_product'] = "(*) Không được để trống chi tiết sản phẩm";
        }

        //Check popularity 
        if (!empty($_POST['popularity'])) {
            $popularity = $_POST['popularity'];
        }

        //Check type product 
        if (!empty($_POST['type_product'])) {
            $type_product = $_POST['type_product'];
        } else {
            $error['type_product'] = "(*) Không được để trống loại sản phẩm";
        }

        //Check status product 
        if (!empty($_POST['status_product'])) {
            $status_product = $_POST['status_product'];
        }

        $created_at_product = date('Y-m-d H:i:s');

        if (empty($error)) {
            $data = array(
                'nameProduct' => $name_product,
                'brandProduct' => $brand_product,
                'typeProduct' => $type_product,
                'popularity' => $popularity,
                'inforProduct' => $detail_product,
                'priceProduct' => $price_product,
                'imgProduct' => $image_product,
                'statusProduct' => $status_product,
                'createdAtProduct' => $created_at_product,
            );

            add_product($data);
            redirect("?mod=product&controller=index&action=index");
        }
    }
    load_view('add');
}

function editAction()
{
    global $error;
    $id = $_GET['id'];
    if (isset($_POST['btn-update-product'])) {
        if (!empty($_POST['name'])) {
            $name = $_POST['name'];
        } else {
            $error['name'] = "(*) Không được để trống tên sản phẩm";
        }

        if (!empty($_POST['price'])) {
            $price = $_POST['price'];
        } else {
            $error['price'] = "(*) Không được để trống giá tiền";
        }

        if (!empty($_POST['brand'])) {
            $brand = $_POST['brand'];
        } else {
            $error['brand'] = "(*) Không được để trống thương hiệu";
        }

        if (isset($_FILES['image']['name'])) {
            $image = $_FILES['image']['name'];
            $pathType = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            $image = "Product" . rand(000, 999) . '.' . $pathType;

            $diachinguon = $_FILES['image']['tmp_name'];
            $diachidich = "public/images/" . $image;
            //Tải hình ảnh lên
            $upload = move_uploaded_file($diachinguon, $diachidich);
            if ($upload == false) {
                $error['image'] = "(*) Chưa tải được hình ảnh";
            }
        }

        if (!empty($_POST['detail'])) {
            $detail = $_POST['detail'];
        } else {
            $error['detail'] = "(*) Không được để trống chi tiết sản phẩm";
        }

        if (!empty($_POST['popularity'])) {
            $popularity = $_POST['popularity'];
        }

        if (!empty($_POST['type'])) {
            $type = $_POST['type'];
        } else {
            $error['type'] = "(*) Không được để trống loại sản phẩm";
        }

        if (!empty($_POST['status'])) {
            $status = $_POST['status'];
        }

        $updated_at_product = date('Y-m-d H:i:s');

        if (empty($error)) {
            $data = array(
                'nameProduct' => $name,
                'brandProduct' => $brand,
                'typeProduct' => $type,
                'popularity' => $popularity,
                'inforProduct' => $detail,
                'priceProduct' => $price,
                'imgProduct' => $image,
                'statusProduct' => $status,
                'createdAtProduct' => $updated_at_product,
            );

            update_product($data, $id);
            redirect("?mod=product&controller=index&action=index");
        }
    }

    load_view('edit');
}

function deleteAction()
{
    if (isset($_GET['id'])) {
        $id_product = $_GET['id'];
        delete_product_by_id($id_product);
        redirect("?mod=product&controller=index&action=index");
    }
}

function cat_productAction()
{
    if (isset($_GET['cat'])) {
        $cat = $_GET['cat'];
        $list_product_by_cat = get_list_product_by_cat($cat);
        $data['list_product_by_cat'] = $list_product_by_cat;
        load_view('cat_product', $data);
    }
}



function searchAction()
{
    if (isset($_POST['btn-search-product'])) {
        if (!empty($_POST['search'])) {
            $key_search = $_POST['search'];
            $list_product = get_product_by_key_search($key_search);
            $data['list_product'] = $list_product;
            load_view('search', $data);
        } else {
            redirect("?mod=product&controller=index&action=index");
        }
    }
}

function detailAction()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $detail_product = get_product_by_id($id);
        $data['detail_product'] = $detail_product;
        load_view('detail', $data);
    }
}

function status_productAction()
{
    if (isset($_GET['status'])) {
        $status = $_GET['status'];

        if ($status == 'available') {
            $list_product_by_status = get_list_available_product();
            $data['list_product_by_status'] = $list_product_by_status;
            load_view('status_product', $data);
        } else if ($status == 'unavailable') {
            $list_product_by_status = get_list_unavailable_product();
            $data['list_product_by_status'] = $list_product_by_status;
            load_view('status_product', $data);
        }
    }
}
