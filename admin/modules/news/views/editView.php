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
        Chỉnh sửa bài viết
      </div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <label for="name">Tiêu đề bài viết</label>
            <input class="form-control" type="text" name="name" id="name">
          </div>
          <div class="form-group">
            <label for="content">Nội dung bài viết</label>
            <textarea name="" class="form-control" id="content" cols="30" rows="5"></textarea>
          </div>

          <div class="form-group">
            <label for="">Trạng thái</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Chờ duyệt
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
              <label class="form-check-label" for="exampleRadios2">
                Công khai
              </label>
            </div>
          </div>



          <button type="submit" class="btn btn-primary">Thêm mới</button>
        </form>
      </div>
    </div>
  </div>
</div>


<?php
get_footer();
?>