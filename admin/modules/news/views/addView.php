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
        Thêm bài viết
      </div>
      <div class="card-body">

        <form action="?mod=news&controller=index&action=add" enctype="multipart/form-data" method="POST">
          <div class="form-group">
            <label for="title_news">Tiêu đề bài viết</label>
            <input class="form-control" type="text" name="title_news" id="title_news">
            <?php echo form_error('title_news') ?>
          </div>

          <div class="form-group d-flex flex-column">
            <label class="mb-3" for="img_news">Ảnh bài viết</label>
            <input style="font-size: 16px; width: 204px;" type="file" name="img_news" id="img_news" class="file-upload">
            <?php
            echo form_error('img_news');
            ?>
          </div>

          <div class="form-group">
            <label for="short_desc_news">Mô tả ngắn</label>
            <textarea name="short_desc_news" class="form-control" id="short_desc_news" cols="30" rows="5"></textarea>
            <?php
            echo form_error('short_desc_news');
            ?>
          </div>

          <div class="form-group">
            <label for="content_news">Nội dung bài viết</label>
            <textarea name="content_news" class="form-control ckeditor" id="content_news" cols="30" rows="5"></textarea>
            <?php
              echo form_error('content_news');
            ?>
          </div>

          <div class="form-group">
            <label for="">Trạng thái</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="status_news" id="exampleRadios1" value="Chờ duyệt" checked>
              <label class="form-check-label" for="exampleRadios1">
                Chờ duyệt
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="status_news" id="exampleRadios2" value="Công khai">
              <label class="form-check-label" for="exampleRadios2">
                Công khai
              </label>
            </div>
          </div>

          <button type="submit" name="btn-add-news" class="btn btn-primary">Thêm mới</button>
        </form>
      </div>
    </div>
  </div>
</div>


<?php
get_footer();
?>