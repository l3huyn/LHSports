<?php
get_header();
?>

<?php
if (!empty($product_by_id)) {
?>
  <div class="grid">
    <div id="content" class="">
      <div class="section" id="info-product-wp">
        <div class="section-detail-product">
          <div class="grid__column-4 detail_product-img-container">
            <img id="zoom" class="detail_product-img" src="http://localhost/LHSports/admin/public/images/<?php echo $product_by_id['imgProduct']; ?>" data-zoom-image="http://localhost/LHSports/admin/public/images/<?php echo $product_by_id['imgProduct']; ?>" alt="">
          </div>

          <div class="grid__column-6 detail">
            <h3 class="title-product"><?php echo $product_by_id['nameProduct']; ?></h3>
            <div class='detail__desc'>
              <p class="product-code brand" style="font-weight: 700;">Thương hiệu: <span style="color: red;"><?php echo  $product_by_id['brandProduct']; ?></span></p>
              <p class="product-code status" style="font-weight: 700;">Tình trạng: <span style="color: red;"><?php echo  $product_by_id['statusProduct']; ?></span></p>
            </div>
            <p class="price"><?php echo currency_format($product_by_id['priceProduct']); ?></p>

            <fieldset class="pro-discount endow">
              <legend>
                <img width="32" height="32" alt="Khuyến mãi" src="https://shopvnb.com/templates/images/code_dis.gif"> CHÍNH SÁCH
              </legend>
              <div class="product-promotions-list-content">
                <p>✔ Sản phẩm cam kết chính hãng</p>
                <p>✔ Thanh toán sau khi kiểm tra và nhận hàng (Giao khung vợt)</p>
                <p>✔ Bảo hành chính hãng theo nhà sản xuất (Tối đa 90 ngày)</p>
              </div>
            </fieldset>

            <div class="num-order-wp">
              <a href="?mod=cart&controller=index&action=add&id=<?php echo $product_by_id['id']; ?>" title="" class="add-to-cart">
                MUA NGAY
              </a>
            </div>

          </div>
        </div>
      </div>
      <div class="section" id="desc-wp">
        <div class="section-head">
          <h3 class="section-title">Mô tả sản phẩm</h3>
        </div>
        <div class="section-detail">
          <div class="inforProduct">
            <?php echo $product_by_id['inforProduct'] ?>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
}
?>



<?php
get_footer();
?>