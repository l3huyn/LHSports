<?php
get_header();
?>

<div class="app__container">
  <div class="grid">
    <div class="grid__row">

      <?php
      if (!empty($list_news)) {
        //----------PAGGING----------//
        #Số bản ghi trên một trang
        $num_per_page = 8;
        #Tổng số bản ghi
        $total_row = count($list_news);
        #Số trang
        $num_page = ceil($total_row / $num_per_page);
        #Số trang hiện tại lấy từ URL xuống
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        #Chỉ số miền bắt đầu mỗi trang
        $start = ($page - 1) * $num_per_page;
        $list_news_by_page = array_slice($list_news, $start, $num_per_page);
        foreach ($list_news_by_page as $news) {
      ?>
          <div class="grid__column-3">
            <div class="news__contaner">
              <div class="news__heading">
                <img class="news__heading-img" src="http://localhost/LHSports/admin/public/images/<?php echo $news['img_news'] ?>" alt="News Badminton">
              </div>

              <div class="news__body">
                <a href="?mod=news&controller=index&action=detail&id=<?php echo $news['id_news'] ?>" class="news__body-link">
                  <h4 class="news__body-title"><?php echo $news['title_news']; ?></h4>

                  <div class="news__body-separate">
                    <span class="news__body-separate--date-time"><?php echo $news['created_at']; ?></span>
                  </div>

                  <p class="news__body-desc"><?php echo $news['short_desc_news']; ?></p>
                </a>
              </div>
            </div>
          </div>
      <?php
        }
      }
      ?>

    </div>
    <?php
    if (!empty($list_news)) {
      echo get_pagging($num_page, $page, "?mod=news&controller=index&action=index");
    }
    ?>
  </div>
</div>

<?php
get_footer();
?>