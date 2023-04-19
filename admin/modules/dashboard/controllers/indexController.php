<?php

function construct()
{
    load_model('index');
}

function indexAction()
{
    $list_orders = get_list_order();
    $data['list_orders'] = $list_orders;
    load_view('index', $data);
}

function editAction() {
    $id_order = $_GET['id'];
    if(isset($_POST['btn-update-order'])) {
        $error = array();
        if(!empty($_POST['status_order'])){
            $status_order = $_POST['status_order'];
        } else {
            $error['status_order'] = "Không bỏ trống trạng thái đơn hàng";
        }

        if(empty($error)) {
            $data = array(
                'status_order' => $status_order,
            );

            update_order($data, $id_order);
            redirect("?mod=dashboard&controller=index&action=index");
        }
    }
    load_view('edit');
}

function deleteAction()
{
    if (isset($_GET['id'])) {
        $id_order = $_GET['id'];
        delete_order_by_id($id_order);
        delete_detail_order_by_id($id_order);
        redirect("?mod=dashboard&controller=index&action=index");
    }
    // load_view()
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
