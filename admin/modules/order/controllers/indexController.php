<?php

function construct()
{
    load_model('index');
}

function indexAction()
{
    $list_order = get_list_orders();
    $data['list_order'] = $list_order;
    load_view('index', $data);
}

function detail_orderAction()
{
    if (isset($_GET['id'])) {
        $id_order = $_GET['id'];
        $list_detail_order = get_list_detail_order($id_order);
        $data['list_detail_order'] = $list_detail_order;
        load_view('detail_order', $data);
    }
}

function deleteAction()
{
    if (isset($_GET['id'])) {
        $id_order = $_GET['id'];
        delete_order_by_id($id_order);
        delete_detail_order_by_id($id_order);
        redirect("?mod=order&controller=index&action=index");
    }
}

function editAction()
{
    $id_order = $_GET['id'];
    if (isset($_POST['btn-update-order'])) {
        $error = array();
        if (!empty($_POST['status_order'])) {
            $status_order = $_POST['status_order'];
        } else {
            $error['status_order'] = "Không bỏ trống trạng thái đơn hàng";
        }

        if (empty($error)) {
            $data = array(
                'status_order' => $status_order,
            );

            update_order($data, $id_order);
            redirect("?mod=order&controller=index&action=index");
        }
    }
    load_view('edit');
}

function filter_orderAction()
{
    if (isset($_GET['filter'])) {
        $filter = $_GET['filter'];

        if ($filter == 'newest') {
            $list_order = get_newst_list_order();
            $data['list_order'] = $list_order;
            load_view('filter_order', $data);
        } else if ($filter == 'oldest') {
            $list_order = get_oldest_list_order();
            $data['list_order'] = $list_order;
            load_view('filter_order', $data);
        }
    }
}

function status_orderAction()
{
    if (isset($_GET['status'])) {
        $status = $_GET['status'];

        if ($status == 'processing') {
            $list_order = get_processing_list_order();
            $data['list_order'] = $list_order;
            load_view('status_order', $data);
        }

        if ($status == 'delivered') {
            $list_order = get_delivered_list_order();
            $data['list_order'] = $list_order;
            load_view('status_order', $data);
        }
    }
}

function searchAction()
{
    if (isset($_POST['btn-search-order'])) {
        if (!empty($_POST['key-search'])) {
            $key_search = $_POST['key-search'];
            $list_order = get_order_by_key_search($key_search);
            $data['list_order'] = $list_order;
            load_view('search', $data);
        } else {
            redirect("?mod=order&controller=index&action=index");
        }
    }
}
