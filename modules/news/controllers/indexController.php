<?php 
function construct() {
  load_model('index');
}

function indexAction() {
  $list_news = get_list_news();
  $data['list_news'] = $list_news;
  load_view('index', $data);
}

























?>