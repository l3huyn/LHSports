<?php
get_header();
?>


  <div class="grid">
    <div class="grid__row">
      <?php
      if (!empty($news_by_id)) {
      ?>
        <div class="card-body">
          <p class="title-news-container"><?php echo $news_by_id['title_news']; ?></p>
          <div class="body-content-admin">
            <div class="auth-and-time">
              <div class="created-at">
              <i class="fa-regular fa-clock"></i>
              <?php echo $news_by_id['created_at'] ?>
              </div>
              <div class=auth-news>
              <i class="fa-solid fa-user"></i>
              <span>Lê Huynh</span>
              </div>
            </div>
            <p class="short-desc-news-container">
              <?php echo $news_by_id['short_desc_news']; ?>
            </p>
            <br>
            <div class="img-news-container">
              <img class="img-news" src="http://localhost/LHSports/admin/public/images/<?php echo $news_by_id['img_news'] ?>" alt="">
            </div>
            <?php echo $news_by_id['content_news']; ?>
          </div>
        </div>

      <?php
      }
      ?>

    </div>
  </div>

<?php
get_footer();
?>