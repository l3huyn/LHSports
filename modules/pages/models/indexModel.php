<?php 
function post_contact($data) {
  return db_insert('contact', $data);
}

?>