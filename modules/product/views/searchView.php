<?php
get_header();
?>

<div class="pb-5 app__container">
  <div class="grid">
    <div class="search-product-name-container">
      <p class="search-product-name">Kết quả tìm kiếm cho: </p>
      <p class="search-product-name-title"> <?php echo get_key_search(); ?></p>
    </div>
    
   
    <div class="grid__full-width">
      <!-- Product -->
      <div class="home-product">
        <!-- Grid -> Row -> Column -->
        <?php
        if (!empty($products)) {
        ?>
          <div class="grid__row">
            <!-- Product item -->
            <?php
            foreach ($products as $product) {
            ?>
              <div class="grid__column-2-4">
                <div class="home-product-item">
                  <a class="home-product-item-link" href="?mod=product&controller=index&action=detail&id=<?php echo $product['id']; ?>">
                    <img class="home-product-item-img" src="http://localhost/LHSports/admin/public/images/<?php echo $product['imgProduct']; ?>" alt="">
                    <h4 class="home-product-item__name"><?php echo $product['nameProduct']; ?></h4>
                    <div class="home-product-item_desc">
                      <span class='brand-item'><?php echo $product['brandProduct'];; ?></span>
                      <span class="home-product-item__price-current"><?php echo currency_format($product['priceProduct']); ?></span>
                    </div>
                    <div class="home-product-item__favourite">
                      <i class="home-product-item__favourite-icon fa-solid fa-check"></i>
                      <span>Yêu thích</span>
                    </div>
                  </a>
                </div>
              </div>
            <?php
            }
            ?>

          </div>
        <?php
        } else {
        ?>
          <div class="no-product-in-search">
            <i class="icon-sad fa-solid fa-face-frown fa-bounce"></i>
            <p class="no-product-in-search-notify">Không có sản phẩm cần tìm</p>
          </div>
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