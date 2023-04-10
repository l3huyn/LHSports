<?php
function construct()
{
  load_model('index');
  load('lib', 'search');
  load('helper', 'url');
}

function indexAction()
{
  $list_product = get_list_product();
  $data['list_product'] = $list_product;
  load_view('index', $data);
}

function detailAction()
{
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $product_by_id = get_product_by_id($id);
    $data['product_by_id'] = $product_by_id;
  }
  load_view('detail', $data);
}

function searchAction()
{
  if (isset($_POST['btn-search'])) {
    if (!empty($_POST['search'])) {
      $key_search = $_POST['search'];
      $products = search_product($key_search);
      $data['products'] = $products;
      load_view('search', $data);
    } else {
      redirect();
    }
  } else {
    redirect();
  }
}

function cat_productAction()
{
  // if (isset($_GET['type'])) {
  //   $type = $_GET['type'];
  //   $list_product_by_cat = get_list_product_by_cat($type);
  //   $data['list_product_by_cat'] = $list_product_by_cat;
  //   load_view('cat_product', $data);
  // }
  if (isset($_GET['type']) && isset($_GET['filter'])) {
    $type = $_GET['type'];
    $filter = $_GET['filter'];

    $filter_increase = 'lowtohigh';
    $filter_decrease = 'hightolow';

    if ($filter == $filter_increase) {
      $list_product = get_list_product_by_cat_increase($type);
      $data['list_product'] = $list_product;
      load_view('cat_product', $data);
    } else if ($filter == $filter_decrease) {
      $list_product = get_list_product_by_cat_decrease($type);
      $data['list_product'] = $list_product;
      load_view('cat_product', $data);
    }
  } else if (isset($_GET['type'])) {
      $type = $_GET['type'];
      $list_product = get_list_product_by_cat($type);
      $data['list_product'] = $list_product;
      load_view('cat_product', $data);
    }
}

function filter_productAction()
{
  if (isset($_GET['filter'])) {
    $filter_increase = 'lowtohigh';
    $filter_decrease = 'hightolow';

    $filter = $_GET['filter'];
    if ($filter == $filter_increase) {
      $list_product = get_list_product_order_by_increase();
      $data['list_product'] = $list_product;
      load_view('filter_product', $data);
    } else if ($filter == $filter_decrease) {
      $list_product = get_list_product_order_by_decrease();
      $data['list_product'] = $list_product;
      load_view('filter_product', $data);
    }
  }
}
