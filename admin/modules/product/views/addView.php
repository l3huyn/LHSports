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

        <form method="POST" action="?mod=product&controller=index&action=add" enctype="multipart/form-data">
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="name_product">Tên sản phẩm</label>
                <input class="form-control" type="text" name="name_product" id="name_product">
                <?php
                echo form_error('name_product');
                ?>
              </div>

              <div class="form-group">
                <label for="price_product">Giá</label>
                <input class="form-control" type="text" name="price_product" id="price_product">
                <?php
                echo form_error('price_product');
                ?>
              </div>

              <div class="form-group">
                <label for="brand_product">Thương hiệu</label>
                <input class="form-control" type="text" name="brand_product" id="brand_product">
                <?php
                echo form_error('brand_product');
                ?>
              </div>

              <div class="form-group d-flex flex-column">
                <label class="mb-3" for="image_product">Ảnh sản phẩm</label>
                <input style="font-size: 16px; width: 204px;" type="file" name="image_product" id="image_product" class="file-upload">
                <?php
                echo form_error('image_product');
                ?>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="detail_product">Chi tiết sản phẩm</label>
            <textarea name="detail_product" class="form-control ckeditor" id="detail_product" cols="30" rows="5"></textarea>
            <?php
            echo form_error('detail_product');
            ?>
          </div>

          <div class="form-group">
            <label for="popularity">Phổ biến</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="popularity" id="popularity1" value="Có">
              <label class="form-check-label" for="popularity1">
                Có
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="popularity" id="popularity2" value="Không" checked>
              <label class="form-check-label" for="popularity2">
                Không
              </label>
            </div>
          </div>

          <div class="form-group d-flex flex-column mb-4">
            <label for="">Loại sản phẩm</label>
            <select name="type_product" class="col-2">
              <option value="">---Chọn---</option>
              <option value="racket">Vợt cầu lông</option>
              <option value="shoes">Giày cầu lông</option>
              <option value="bag">Túi vợt cầu lông</option>
              <option value="balo">Balo cầu lông</option>
              <option value="accessory">Phụ kiện cầu lông</option>
              <option value="shirt">Áo cầu lông</option>
              <option value="shorts">Quần cầu lông</option>
              <option value="sportdress">Váy cầu lông</option>
            </select>
            <?php
            echo form_error('type_product');
            ?>
          </div>

          <div class="form-group">
            <label for="status_product">Trạng thái</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="status_product" id="exampleRadios1" value="Còn hàng" checked>
              <label class="form-check-label" for="exampleRadios1">
                Còn hàng
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="status_product" id="exampleRadios2" value="Hết hàng">
              <label class="form-check-label" for="exampleRadios2">
                Hết hàng
              </label>
            </div>
          </div>

          <button type="submit" name="btn-add-product" class="btn btn-primary">Thêm mới</button>
        </form>
      </div>
    </div>
  </div>
</div>


<?php
get_footer();
?>