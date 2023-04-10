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
        Thêm sản phẩm
      </div>
      <div class="card-body">
        <form>
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="name">Tên sản phẩm</label>
                <input class="form-control" type="text" name="name" id="name">
              </div>
              <div class="form-group">
                <label for="name">Giá</label>
                <input class="form-control" type="text" name="name" id="name">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="intro">Mô tả sản phẩm</label>
                <textarea name="" class="form-control" id="intro" cols="30" rows="5"></textarea>
              </div>
            </div>
          </div>


          <div class="form-group">
            <label for="intro">Chi tiết sản phẩm</label>
            <textarea name="" class="form-control" id="intro" cols="30" rows="5"></textarea>
          </div>


          <div class="form-group">
            <label for="imgProduct">Chọn hình ảnh</label>
            <input style="margin: 0;" type="file" id="imgProduct" name="imgProduct">
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