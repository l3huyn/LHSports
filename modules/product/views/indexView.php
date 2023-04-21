      <?php
      get_header();
      ?>

      <!--Begin: Content -->
      <div class="app__container">
        <div class="grid">
          <div class="grid__row app__content">
            <div class="grid__column-2">
              <nav class="category">
                <h3 class="category__heading">
                  Danh mục
                </h3>

                <ul class="category-list">
                  <li class="category-item category-item--active">
                    <a href="" class="category-item__link">Vợt cầu lông</a>
                  </li>

                  <li class="category-item">
                    <a href="" class="category-item__link">Giày cầu lông</a>
                  </li>

                  <li class="category-item">
                    <a href="" class="category-item__link">Balo cầu lông</a>
                  </li>

                  <li class="category-item">
                    <a href="" class="category-item__link">Túi vợt cầu lông</a>
                  </li>

                  <li class="category-item">
                    <a href="" class="category-item__link">Phụ kiện cầu lông</a>
                  </li>

                  <li class="category-item">
                    <a href="?mod=product&controller=index&action=cat_product&type=shirt" class="category-item__link">Áo cầu lông</a>
                  </li>

                  <li class="category-item">
                    <a href="?mod=product&controller=index&action=cat_product&type=shorts" class="category-item__link">Quần cầu lông</a>
                  </li>

                  <li class="category-item">
                    <a href="?mod=product&controller=index&action=cat_product&type=sportdress" class="category-item__link">Váy cầu lông</a>
                  </li>
                </ul>
              </nav>
            </div>

            <div class="grid__column-10">
              <div class="home-filter">
                <span class="home-filter__label">Sắp xếp theo</span>
                <div class="select-input">
                  <span class="select-input__label">Giá</span>
                  <i class="select-input__icon fa-solid fa-angle-down"></i>

                  <!-- List option -->
                  <ul class="select-input__list">
                    <li class="select-input__item">
                      <a href="?mod=product&controller=index&action=filter_product&filter=lowtohigh" class="select-input__item-link">
                        <i class="icon-arrow-filter fa-solid fa-arrow-up fa-bounce"></i>
                        Thấp đến Cao
                      </a>
                    </li>
                    <li class="select-input__item">
                      <a href="?mod=product&controller=index&action=filter_product&filter=hightolow" class="select-input__item-link">
                        <i class="icon-arrow-filter fa-solid fa-arrow-down fa-bounce"></i>
                        Cao đến Thấp
                      </a>
                    </li>
                  </ul>
                </div>
              </div>

              <!-- Product -->
              <div class="home-product">
                <!-- Grid -> Row -> Column -->
                <div class="grid__row">
                  <!-- Product item -->
                  <?php
                  if (!empty($list_product)) {
                    //----------PAGGING----------//
                    #Số bản ghi trên một trang
                    $num_per_page = 10;
                    #Tổng số bản ghi
                    $total_row = count($list_product);
                    #Số trang
                    $num_page = ceil($total_row / $num_per_page);
                    #Số trang hiện tại lấy từ URL xuống
                    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                    #Chỉ số miền bắt đầu mỗi trang
                    $start = ($page - 1) * $num_per_page;
                    $list_product_by_page = array_slice($list_product, $start, $num_per_page);

                    foreach ($list_product_by_page as $product) {
                  ?>
                      <div class="grid__column-2-4">
                        <div class="home-product-item">
                          <a class="home-product-item-link" href="?mod=product&controller=index&action=detail&id=<?php echo $product['id']; ?>">
                            <img class="home-product-item-img" src="http://localhost/LHSports/admin/public/images/<?php echo $product['imgProduct'] ?>" alt="">
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
                  }
                  ?>



                </div>
              </div>

              <!-- Pagination -->
              <?php
              if (!empty($list_product)) {
                echo get_pagging($num_page, $page, "?mod=product&controller=index&action=index");
              }
              ?>
              <!-- <ul class="pagination home-product__pagination">

                <li class="pagination-item pagination-item__active">
                  <a href="?mod=product&controller=index&action=index&page=1" class="pagination-item__link">1</a>
                </li>

                <li class="pagination-item">
                  <a href="?mod=product&controller=index&action=index&page=2" class="pagination-item__link">2</a>
                </li>

                <li class="pagination-item">
                  <a href="?mod=product&controller=index&action=index&page=3" class="pagination-item__link">3</a>
                </li>

                <li class="pagination-item">
                  <a href="" class="pagination-item__link">4</a>
                </li>

                <li class="pagination-item">
                  <a href="" class="pagination-item__link">5</a>
                </li>

              </ul> -->

            </div>
          </div>
        </div>


      </div>
      <!--End: Content -->

      <?php
      get_footer();
      ?>