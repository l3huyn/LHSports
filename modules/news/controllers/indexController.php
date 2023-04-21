<?php 
function construct() {
  load_model('index');
}

function indexAction() {
  $list_news = get_list_news();
  $data['list_news'] = $list_news;
  load_view('index', $data);
}

function detailAction() {
  if(isset($_GET['id'])) {
    $id_news = $_GET['id'];
    $news_by_id = get_news_by_id($id_news);
    $data['news_by_id'] = $news_by_id;
    load_view('detail', $data);
  }
}
























?>