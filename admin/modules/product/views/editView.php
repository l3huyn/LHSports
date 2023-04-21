<?php
get_header();
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $product = get_product_by_id($id);
}

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

        <form method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="name">Tên sản phẩm</label>
                <input class="form-control" type="text" name="name" id="name" value="<?php echo $product['nameProduct'] ?>">
                <?php echo form_error('name') ?>
              </div>

              <div class="form-group">
                <label for="price">Giá</label>
                <input class="form-control" type="text" name="price" id="price" value="<?php echo currency_format($product['priceProduct']) ?>">
                <?php echo form_error('price') ?>
              </div>

              <div class="form-group">
                <label for="brand">Thương hiệu</label>
                <input class="form-control" type="text" name="brand" id="brand" value="<?php echo $product['brandProduct'] ?>">
                <?php echo form_error('brand') ?>
              </div>

              <div class="form-group d-flex flex-column">
                <label class="mb-3" for="image">Ảnh sản phẩm</label>
                <input style="font-size: 16px; width: 204px;" type="file" name="image" id="image" class="file-upload">
                <img style="width: 150px; height: 150px; object-fit: cover; margin-top: 10px; border: 4px solid #ccc;" src="http://localhost/LHSports/admin/public/images/<?php echo $product['imgProduct'] ?>" alt="">
                <?php echo form_error('image') ?>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="detail">Chi tiết sản phẩm</label>
            <textarea name="detail" class="form-control ckeditor" id="detail" cols="30" rows="5">
              <?php echo $product['inforProduct'] ?>
            </textarea>
            <?php echo form_error('detail') ?>
          </div>

          <div class="form-group">
            <label for="popularity">Phổ biến</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="popularity" id="popularity1" value="Có" <?php if (isset($product['popularity']) && $product['popularity'] == 'Có') {
                                                                                                            echo "checked='checked'";
                                                                                                          } ?>>
              <label class="form-check-label" for="popularity1">
                Có
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="popularity" id="popularity2" value="Không" <?php if (isset($product['popularity']) && $product['popularity'] == 'Không') {
                                                                                                              echo "checked='checked'";
                                                                                                            } ?>>
              <label class="form-check-label" for="popularity2">
                Không
              </label>
            </div>
          </div>

          <div class="form-group d-flex flex-column mb-4">
            <label for="">Loại sản phẩm</label>
            <select name="type" class="col-2">
              <option value="">---Chọn---</option>
              <option <?php if (isset($product['typeProduct']) && $product['typeProduct'] == 'racket') {
                        echo "selected='selected'";
                      } ?> value="racket">Vợt cầu lông</option>
              <option <?php if (isset($product['typeProduct']) && $product['typeProduct'] == 'shoes') {
                        echo "selected='selected'";
                      } ?> value="shoes">Giày cầu lông</option>
              <option <?php if (isset($product['typeProduct']) && $product['typeProduct'] == 'bag') {
                        echo "selected='selected'";
                      } ?> value="bag">Túi vợt cầu lông</option>
              <option <?php if (isset($product['typeProduct']) && $product['typeProduct'] == 'balo') {
                        echo "selected='selected'";
                      } ?> value="balo">Balo cầu lông</option>
              <option <?php if (isset($product['typeProduct']) && $product['typeProduct'] == 'accessory') {
                        echo "selected='selected'";
                      } ?> value="accessory">Phụ kiện cầu lông</option>
              <option <?php if (isset($product['typeProduct']) && $product['typeProduct'] == 'shirt') {
                        echo "selected='selected'";
                      } ?> value="shirt">Áo cầu lông</option>
              <option <?php if (isset($product['typeProduct']) && $product['typeProduct'] == 'shorts') {
                        echo "selected='selected'";
                      } ?> value="shorts">Quần cầu lông</option>
              <option <?php if (isset($product['typeProduct']) && $product['typeProduct'] == 'sportdress') {
                        echo "selected='selected'";
                      } ?> value="sportdress">Váy cầu lông</option>
            </select>
            <?php echo form_error('type') ?>
          </div>

          <div class="form-group">
            <label for="status">Trạng thái</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="Còn hàng" <?php if (isset($product['statusProduct']) && $product['statusProduct'] == 'Còn hàng') {
                                                                                                                echo "checked='checked'";
                                                                                                              } ?>>
              <label class="form-check-label" for="exampleRadios1">
                Còn hàng
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="Hết hàng" <?php if (isset($product['statusProduct']) && $product['statusProduct'] == 'Hết hàng') {
                                                                                                                echo "checked='checked'";
                                                                                                              } ?>>
              <label class="form-check-label" for="exampleRadios2">
                Hết hàng
              </label>
            </div>
          </div>

          <button type="submit" name="btn-update-product" class="btn btn-primary">Thêm mới</button>
        </form>
      </div>
    </div>
  </div>
</div>


<?php
get_footer();
?>