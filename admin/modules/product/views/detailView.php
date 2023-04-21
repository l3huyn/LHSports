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
        Chi tiết sản phẩm
      </div>
      <?php
      if (!empty($detail_product)) {
      ?>
        <div class="card-body">
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="name">Tên sản phẩm</label>
                <input class="form-control" type="text" name="name" id="name" value="<?php echo $detail_product['nameProduct'] ?>">
              </div>

              <div class="form-group">
                <label for="price">Giá</label>
                <input class="form-control" type="text" name="price" id="price" value="<?php echo currency_format($detail_product['priceProduct']) ?>">
              </div>

              <div class="form-group">
                <label for="brand">Thương hiệu</label>
                <input class="form-control" type="text" name="brand" id="brand" value="<?php echo $detail_product['brandProduct'] ?>">
              </div>

              <div class="form-group d-flex flex-column">
                <label class="mb-3" for="image">Ảnh sản phẩm</label>
                <img style="width: 150px; height: 150px; object-fit: cover; border: 4px solid #ccc;" src="http://localhost/LHSports/admin/public/images/<?php echo $detail_product['imgProduct'] ?>" alt="">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="detail">Chi tiết sản phẩm</label>
            <textarea name="detail" class="form-control ckeditor" id="detail" cols="30" rows="5">
                  <?php echo $detail_product['inforProduct'] ?>
                </textarea>
          </div>

          <div class="form-group">
            <label for="popularity">Phổ biến</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="popularity" id="popularity1" value="Có" <?php if (isset($detail_product['popularity']) && $detail_product['popularity'] == 'Có') {
                                                                                                            echo "checked='checked'";
                                                                                                          } ?>>
              <label class="form-check-label" for="popularity1">
                Có
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="popularity" id="popularity2" value="Không" <?php if (isset($detail_product['popularity']) && $detail_product['popularity'] == 'Không') {
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
              <option <?php if (isset($detail_product['typeProduct']) && $detail_product['typeProduct'] == 'racket') {
                        echo "selected='selected'";
                      } ?> value="racket">Vợt cầu lông</option>
              <option <?php if (isset($detail_product['typeProduct']) && $detail_product['typeProduct'] == 'shoes') {
                        echo "selected='selected'";
                      } ?> value="shoes">Giày cầu lông</option>
              <option <?php if (isset($detail_product['typeProduct']) && $detail_product['typeProduct'] == 'bag') {
                        echo "selected='selected'";
                      } ?> value="bag">Túi vợt cầu lông</option>
              <option <?php if (isset($detail_product['typeProduct']) && $detail_product['typeProduct'] == 'balo') {
                        echo "selected='selected'";
                      } ?> value="balo">Balo cầu lông</option>
              <option <?php if (isset($detail_product['typeProduct']) && $detail_product['typeProduct'] == 'accessory') {
                        echo "selected='selected'";
                      } ?> value="accessory">Phụ kiện cầu lông</option>
              <option <?php if (isset($detail_product['typeProduct']) && $detail_product['typeProduct'] == 'shirt') {
                        echo "selected='selected'";
                      } ?> value="shirt">Áo cầu lông</option>
              <option <?php if (isset($detail_product['typeProduct']) && $detail_product['typeProduct'] == 'shorts') {
                        echo "selected='selected'";
                      } ?> value="shorts">Quần cầu lông</option>
              <option <?php if (isset($detail_product['typeProduct']) && $detail_product['typeProduct'] == 'sportdress') {
                        echo "selected='selected'";
                      } ?> value="sportdress">Váy cầu lông</option>
            </select>
          </div>

          <div class="form-group">
            <label for="status">Trạng thái</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="Còn hàng" <?php if (isset($detail_product['statusProduct']) && $detail_product['statusProduct'] == 'Còn hàng') {
                                                                                                                echo "checked='checked'";
                                                                                                              } ?>>
              <label class="form-check-label" for="exampleRadios1">
                Còn hàng
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="Hết hàng" <?php if (isset($detail_product['statusProduct']) && $detail_product['statusProduct'] == 'Hết hàng') {
                                                                                                                echo "checked='checked'";
                                                                                                              } ?>>
              <label class="form-check-label" for="exampleRadios2">
                Hết hàng
              </label>
            </div>
          </div>

          <div class="form-group d-flex">
            <label for="detail">Ngày tạo: </label>
            <p class="ml-2">
              <?php echo $detail_product['createdAtProduct'] ?>
            </p>
          </div>

          <div class="form-group d-flex">
            <label for="detail">Trạng thái: </label>
            <p class="ml-2">
              <?php echo $detail_product['statusProduct'] ?>
            </p>
          </div>
        </div>
      <?php
      }
      ?>

    </div>
  </div>
</div>


<?php
get_footer();
?>