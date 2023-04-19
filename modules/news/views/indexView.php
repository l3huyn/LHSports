<?php
get_header();
?>

<div class="app__container">
  <div class="grid">
    <div class="grid__row">

      <?php
      foreach ($list_news as $news) {
      ?>
        <div class="grid__column-3">
          <div class="news__contaner">
            <div class="news__heading">
              <img class="news__heading-img" src="http://localhost/LHSports/admin/public/images/<?php echo $news['img_news'] ?>" alt="News Badminton">
            </div>

            <div class="news__body">
              <a href="" class="news__body-link">
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
      ?>

    </div>
    <ul class="pagination news__pagination">
      <li class="pagination-item">
        <a href="" class="pagination-item__link">
          <i class="pagination-item__icon fas fa-angle-left"></i>
        </a>
      </li>

      <li class="pagination-item pagination-item__active">
        <a href="" class="pagination-item__link">1</a>
      </li>

      <li class="pagination-item">
        <a href="" class="pagination-item__link">2</a>
      </li>

      <li class="pagination-item">
        <a href="" class="pagination-item__link">3</a>
      </li>

      <li class="pagination-item">
        <a href="" class="pagination-item__link">4</a>
      </li>

      <li class="pagination-item">
        <a href="" class="pagination-item__link">5</a>
      </li>

      <li class="pagination-item">
        <a href="" class="pagination-item__link">...</a>
      </li>

      <li class="pagination-item">
        <a href="" class="pagination-item__link">14</a>
      </li>



      <li class="pagination-item">
        <a href="" class="pagination-item__link">
          <i class="pagination-item__icon fas fa-angle-right"></i>
        </a>
      </li>
    </ul>
  </div>
</div>

<?php
get_footer();
?>