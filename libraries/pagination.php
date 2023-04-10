<?php
// function get_pagging($num_page, $page){
//   $str_pagging = "<ul class='pagging fl-right' id='list-paging'>";
//       $str_pagging .= "<li class='pagging-num'><a class = 'common_selector'><<</a></li>";
//   for($i = 1; $i <= $num_page; $i++){
//      $active = "";
//      if($page == $i){
//          $active = 'active-num-page';
//      }
//      $str_pagging .= "<li class='pagging-num'><a class = 'common_selector $active'>$i</a></li>";
//   }
//       $str_pagging .= "<li class='pagging-num'><a class = 'common_selector'>>></a></li>";
//   $str_pagging .= "</ul>";
//   return $str_pagging;
// }

//Ham get_pagging
function get_pagging($num_page, $page, $base_url = "")
{
  $str_pagging =  "<ul class='pagination home-product__pagination'>";
  if ($page > 1) {
    $page_prev = $page - 1;
    $str_pagging .= "<li class='pagination-item'><a class='pagination-item__link' href= \"{$base_url}&page={$page_prev}\"><i class='fa-sharp fa-solid fa-arrow-left'></i></a></li>";
  }

  for ($i = 1; $i <= $num_page; $i++) {
    $active = "";
    if ($i == $page) {
      $active = "active";
    }
    $str_pagging .= "<li class='pagination-item'><a class='pagination-item__link {$active}' href= \"{$base_url}&page={$i}\">{$i}</a></li>";
  }

  if ($page < $num_page) {
    $page_next = $page + 1;
    $str_pagging .= "<li class='pagination-item'><a class='pagination-item__link' href= \"{$base_url}&page={$page_next}\"><i class='fa-solid fa-arrow-right'></i></a></li>";
  }

  $str_pagging .=  "</ul>";
  return $str_pagging;
}


?>
<!-- <html>
  <a href=""></a>
</html> -->