<?php 
//Ham tra ve key tim kiem tu URL
function get_key_search() {
  if(isset($_POST['btn-search'])) {
    $key_search = $_POST['search'];
  }
  return $key_search;
}



?>