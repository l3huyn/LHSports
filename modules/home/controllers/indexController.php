<?php 
function construct() {
  load_model('index');
}

function indexAction() {
  $product_popularity = get_product_by_popularity();
  $data['product_popularity'] = $product_popularity;
  load_view('index', $data);
}

























?>