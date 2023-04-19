<?php
get_header();
?>

<?php
get_sidebar();
?>

<div id="wp-content">
  <div id="content" class="container-fluid">
    <div class="card">
      <div class="card-header font-weight-bold">
        Chi tiết bài viết
      </div>
      <?php if (!empty($news_by_admin)) {
      ?>
        <div class="card-body">
          <h3><?php echo $news_by_admin['title_news']; ?></h3>
          
        </div>
      <?php
      } ?>

    </div>
  </div>
</div>


<?php
get_footer();
?>