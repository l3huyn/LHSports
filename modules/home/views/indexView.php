<?php
get_header();
?>

<div class="app__container">
  <div class="container-fluid p-0 ">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="public/images/banner-1.png" class="d-block w-100" alt="...">
        </div>

        <div class="carousel-item">
          <img src="public/images/banner-2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="public/images/banner-3.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <div class="grid">
    <div class="contaner__policy">
      <div class="container__policy-item">
        <i class="container__policy-icon fa-solid fa-truck"></i>
        <div class="container__policy-body">
          <span class="container__policy-desc">Vận chuyển
            <span>TOÀN QUỐC</span>
          </span>
          <span class="container__policy-desc">Thanh toán khi nhận hàng
          </span>
        </div>
      </div>

      <div class="container__policy-item">
        <i class="container__policy-icon fa-solid fa-thumbs-up"></i>
        <div class="container__policy-body">
          <span class="container__policy-desc">Bảo đảm chất lượng</span>
          <span class="container__policy-desc">Sản phẩm bảo đảm chất lượng</span>
        </div>
      </div>

      <div class="container__policy-item">
        <i class="container__policy-icon fa-solid fa-credit-card"></i>
        <div class="container__policy-body">
          <span class="container__policy-desc">Tiến hành
            <span>THANH TOÁN</span>
          </span>
          <span class="container__policy-desc">Với nhiều
            <span>PHƯƠNG THỨC</span>
          </span>
        </div>
      </div>

      <div class="container__policy-item">
        <i class="container__policy-icon fa-solid fa-box-open"></i>
        <div class="container__policy-body">
          <span class="container__policy-desc">Đổi sản phẩm mới
          </span>
          <span class="container__policy-desc">Nếu sản phẩm lỗi</span>
        </div>
      </div>


    </div>

    <div class="nav__home-page">
      <h2 class="nav__home-page-heading">Danh mục</h2>
      <div class="grid__row">
        <div class="grid__column-3">
          <div class="nav__home-page-item">
            <a href="?mod=product&controller=index&action=cat_product&type=racket" class="nav__home-page-item-link">
              <img src="public/images/1.1.png" alt="" class="nav__home-page-item-img">
            </a>
            <div class="nav__banner">
              <a href="?mod=product&controller=index&action=cat_product&type=racket" class="nav__banner-link">
                <span class="nav__banner-title">Vợt cầu lông</span>
              </a>
            </div>
          </div>
        </div>

        <div class="grid__column-3">
          <div class="nav__home-page-item">
            <a href="?mod=product&controller=index&action=cat_product&type=shoes" class="nav__home-page-item-link">
              <img src="public/images/2_1 (1).png" alt="" class="nav__home-page-item-img">
            </a>
            <div class="nav__banner">
              <a href="?mod=product&controller=index&action=cat_product&type=shoes" class="nav__banner-link">
                <span class="nav__banner-title">Giày cầu lông</span>
              </a>
            </div>
          </div>
        </div>

        <div class="grid__column-3">
          <div class="nav__home-page-item">
            <a href="?mod=product&controller=index&action=cat_product&type=bag" class="nav__home-page-item-link">
              <img src="public/images/5.png" alt="" class="nav__home-page-item-img">
            </a>
            <div class="nav__banner">
              <a href="?mod=product&controller=index&action=cat_product&type=bag" class="nav__banner-link">
                <span class="nav__banner-title">Túi vợt cầu lông</span>
              </a>
            </div>
          </div>
        </div>

        <div class="grid__column-3">
          <div class="nav__home-page-item">
            <a href="?mod=product&controller=index&action=cat_product&type=accessory" class="nav__home-page-item-link">
              <img src="public/images/7.png" alt="" class="nav__home-page-item-img">
            </a>
            <div class="nav__banner">
              <a href="?mod=product&controller=index&action=cat_product&type=accessory" class="nav__banner-link">
                <span class="nav__banner-title">Phụ kiện cầu lông</span>
              </a>
            </div>
          </div>
        </div>

        <div class="grid__column-3">
          <div class="nav__home-page-item">
            <a href="?mod=product&controller=index&action=cat_product&type=balo" class="nav__home-page-item-link">
              <img src="public/images/6.png" alt="" class="nav__home-page-item-img">
            </a>
            <div class="nav__banner">
              <a href="?mod=product&controller=index&action=cat_product&type=balo" class="nav__banner-link">
                <span class="nav__banner-title">Balo cầu lông</span>
              </a>
            </div>
          </div>
        </div>
        <div class="grid__column-3">
          <div class="nav__home-page-item">
            <a href="?mod=product&controller=index&action=cat_product&type=shirt" class="nav__home-page-item-link">
              <img src="public/images/AnyConv.com__3_1.png" alt="" class="nav__home-page-item-img">
            </a>
            <div class="nav__banner">
              <a href="?mod=product&controller=index&action=cat_product&type=shirt" class="nav__banner-link">
                <span class="nav__banner-title">Áo cầu lông</span>
              </a>
            </div>
          </div>
        </div>
        <div class="grid__column-3">
          <div class="nav__home-page-item">
            <a href="?mod=product&controller=index&action=cat_product&type=shorts" class="nav__home-page-item-link">
              <img src="public/images/AnyConv.com__4.png" alt="" class="nav__home-page-item-img">
            </a>
            <div class="nav__banner">
              <a href="?mod=product&controller=index&action=cat_product&type=shorts" class="nav__banner-link">
                <span class="nav__banner-title">Quần cầu lông</span>
              </a>
            </div>
          </div>
        </div>
        <div class="grid__column-3">
          <div class="nav__home-page-item">
            <a href="?mod=product&controller=index&action=cat_product&type=sportdress" class="nav__home-page-item-link">
              <img src="public/images/8.png" alt="" class="nav__home-page-item-img">
            </a>
            <div class="nav__banner">
              <a href="?mod=product&controller=index&action=cat_product&type=sportdress" class="nav__banner-link">
                <span class="nav__banner-title">Váy cầu lông</span>
              </a>
            </div>
          </div>
        </div>


      </div>
    </div>

    <div class="sale-off__home-page">
      <h2 class="sale-off__home-page-heading">Sale off</h2>
      <div class="grid__row sale-off__container">
        <div class="grid__column-4">
          <div class="sale-off__banner">
            <a href="" class="sale-off__banner-link">
              <img src="public/images/AnyConv.com__sale_off_1.png" alt="" class="sale-off__banner-img">
            </a>
          </div>
        </div>
        <div class="grid__column-4">
          <div class="sale-off__banner">
            <a href="" class="sale-off__banner-link">
              <img src="public/images/AnyConv.com__sale_off_2.png" alt="" class="sale-off__banner-img">
            </a>
          </div>
        </div>
        <div class="grid__column-4">
          <div class="sale-off__banner">
            <a href="" class="sale-off__banner-link">
              <img src="public/images/AnyConv.com__sale_off_3.png" alt="" class="sale-off__banner-img">
            </a>
          </div>
        </div>
      </div>

      <div class="grid__row sale-off__container-item">
        <?php
        if (!empty($product_popularity)) {
          foreach ($product_popularity as $item) {
        ?>
            <div class="grid__column-2-4 sale-off__item-product">
              <div class="home-product-item">
                <a class="home-product-item-link" href="?mod=product&controller=index&action=detail&id=<?php echo $item['id']; ?>">
                  <img class="home-product-item-img" src="public/imgProduct/<?php echo $item['imgProduct']; ?>" alt="">
                  <h4 class="home-product-item__name"><?php echo $item['nameProduct']; ?></h4>
                  <div class="home-product-item_desc">
                    <span class='brand-item'><?php echo $item['brand']; ?></span>
                    <span class="home-product-item__price-current"><?php echo currency_format($item['price']); ?></span>
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

    <div class="news__home-page">
      <h2 class="news__home-page-heading">Tin tức</h2>
      <div class="grid__row news__home-page-container">
        <div class="grid__column-3">
          <div class="news__contaner">
            <div class="news__heading">
              <img class="news__heading-img" src="https://shopvnb.com/img/600x360/uploads/tin_tuc/cac-mau-vot-yonex-astrox-cao-cap-cach-chon-vot-cau-long-yonex-astrox-10.jpg" alt="News Badminton">
            </div>

            <div class="news__body">
              <a href="" class="news__body-link">
                <h4 class="news__body-title">Các mẫu Vợt Yonex Astrox cao cấp - Cách chọn vợt cầu lông Yonex Astrox</h4>

                <div class="news__body-separate">
                  <span class="news__body-separate--date-time">22-9-2022 22:36:17</span>
                </div>

                <p class="news__body-desc">Astrox là một trong các dòng vợt được ưa chuộng của Yonex. Là dòng vợt thiên công tốc độ nhanh, phù hợp trong cả đánh đôi và đánh đơn. Vợt cầu lông Yonex Astrox được sử dụng nhiều nhất bởi các vận động viên chuyên nghiệp, trong số đó có cả những vận động viên đang ở vị trí số 1 thế giới. Sau đây hãy cùng tìm hiểu một số cây vợt Yonex Astrox cao cấp nhất, cũng như cách chọn vợt cầu lông Yonex Astrox phù hợp với lối đánh.</p>
              </a>
            </div>
          </div>
        </div>
        <div class="grid__column-3">
          <div class="news__contaner">
            <div class="news__heading">
              <img class="news__heading-img" src="https://shopvnb.com/img/600x360/uploads/tin_tuc/nhung-mau-vot-cau-long-khoang-1-trieu-tot-nhat-tren-thi-truong-15.jpg" alt="News Badminton">
            </div>

            <div class="news__body">
              <a href="" class="news__body-link">
                <h4 class="news__body-title">Những mẫu vợt cầu lông khoảng 1 triệu tốt nhất trên thị trường</h4>

                <div class="news__body-separate">
                  <span class="news__body-separate--date-time">19-09-2022 23:26:33</span>
                </div>

                <p class="news__body-desc">Với mức giá 1 triệu người chơi có thể có rất nhiều lựa chọn vợt ở phân khúc tầm trung từ các thương hiệu như Yonex, Lining, Apacs, Proace,... Đây là phân khúc phù hợp với những bạn mới bắt đầu chơi, hoặc các bạn học sinh - sinh viên có điều kiện kinh tế ở mức vừa phải. Sau đây hãy cùng điểm qua một số mẫu vợt cầu lông khoảng 1 triệu đáng cân nhắc.</p>
              </a>
            </div>
          </div>
        </div>
        <div class="grid__column-3">
          <div class="news__contaner">
            <div class="news__heading">
              <img class="news__heading-img" src="https://shopvnb.com/img/600x360/uploads/tin_tuc/vot-cau-long-tam-gia-3-trieu-dang-mua-nhat-10.jpg" alt="News Badminton">
            </div>

            <div class="news__body">
              <a href="" class="news__body-link">
                <h4 class="news__body-title">Vợt cầu lông tầm giá 3 triệu đáng mua nhất</h4>

                <div class="news__body-separate">
                  <span class="news__body-separate--date-time"> 16-09-2022 19:19:02</span>
                </div>

                <p class="news__body-desc">Với mức giá 3 triệu có thể chưa mua được những mẫu vợt đắt nhất nhưng đủ để sử hữu một cây vợt cầu lông cao cấp, với những công nghệ tốt nhất từ các thương hiệu lớn. Dưới đây là những mẫu vợt cầu lông tầm giá 3 triệu đáng mua nhất trên thị trường.</p>
              </a>
            </div>
          </div>
        </div>
        <div class="grid__column-3">
          <div class="news__contaner">
            <div class="news__heading">
              <img class="news__heading-img" src="https://shopvnb.com/img/600x360/uploads/tin_tuc/mot-so-mau-giay-cau-long-mizuno-nu-dang-duoc-ua-chuong-8.jpg" alt="News Badminton">
            </div>

            <div class="news__body">
              <a href="" class="news__body-link">
                <h4 class="news__body-title">Một số mẫu giày cầu lông Mizuno nữ đang được ưa chuộng</h4>

                <div class="news__body-separate">
                  <span class="news__body-separate--date-time">13-09-2022 23:36:08</span>
                </div>

                <p class="news__body-desc">Giày cầu lông Mizuno cũng chiếm một thị phần nhất định trên thị trường. Nhờ vào thương hiệu đến từ Nhật Bản đã nhận được những đánh giá tích cực từ phía đông đảo người dùng. Sau đây là một số mẫu giày cầu lông Mizuno nữ mà các bạn có thể cân nhắc lựa chọn.</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<a href="#">
  <button id="myBtn" title="Go to top">
    <i class="fa-solid fa-arrow-up fa-bounce"></i>
  </button>
</a>

<?php
get_footer();
?>