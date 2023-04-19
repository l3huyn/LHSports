<?php
get_header();
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $news = get_news_by_id($id);
}
?>

<?php
get_sidebar();
?>

<div id="wp-content">
  <div id="content" class="container-fluid">
    <div class="card">
      <div class="card-header font-weight-bold">
        Chỉnh sửa bài viết
      </div>
      <div class="card-body">
        <?php
        if (!empty($news)) {
        ?>
          <form enctype="multipart/form-data" method="POST">
            <div class="form-group">
              <label for="title">Tiêu đề bài viết</label>
              <input class="form-control" type="text" name="title" id="title" value="<?php echo $news['title_news'] ?>">
              <?php echo form_error('title') ?>
            </div>

            <div class="form-group d-flex flex-column">
              <label class="mb-3" for="image">Ảnh bài viết</label>
              <input style="font-size: 16px; width: 204px;" type="file" name="image" id="image" class="file-upload">
              <?php echo form_error('image') ?>
              <img style="width: 150px; height: 150px; object-fit: cover; margin-top: 10px; border: 4px solid #ccc;" src="http://localhost/LHSports/admin/public/images/<?php echo $news['img_news'] ?>" alt="">
            </div>

            <div class="form-group">
              <label for="short_desc">Mô tả ngắn</label>
              <textarea name="short_desc" class="form-control" id="short_desc" cols="30" rows="5">
              <?php echo $news['short_desc_news'] ?>
              </textarea>
              <?php echo form_error('short_desc') ?>
            </div>

            <div class="form-group">
              <label for="content">Nội dung bài viết</label>
              <textarea name="content" class="form-control ckeditor" id="content" cols="30" rows="5">
              <?php echo $news['content_news'] ?>
              </textarea>
              <?php echo form_error('content') ?>
            </div>

            <div class="form-group">
              <label for="">Trạng thái</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="Chờ duyệt" <?php if(isset($news['status_news']) && $news['status_news'] == 'Chờ duyệt') { echo "checked='checked'";}?>>
                <label class="form-check-label" for="exampleRadios1">
                  Chờ duyệt
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="Công khai" <?php if(isset($news['status_news']) && $news['status_news'] == 'Công khai') { echo "checked='checked'";}?>>
                <label class="form-check-label" for="exampleRadios2">
                  Công khai
                </label>
              </div>
            </div>

            <button type="submit" name="btn-update-news" class="btn btn-primary">Cập nhật</button>
          </form>
        <?php
        }
        ?>

      </div>
    </div>
  </div>
</div>


<?php
get_footer();
?>