<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="public/css/base.css">
  <link rel="stylesheet" href="public/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400, 500, 700&display=swap&subset=vietnamese" rel="stylesheet">
  <link rel="stylesheet" href="public/fonts/fontawesome-free-6.2.0/css/all.min.css">
  


  <title>LHSports</title>
</head>

<body>
  <div class="web">
    <div class="app">
      <header class="header">
        <div class="grid">
          <!--Begin: Header Box -->
          <div class="header__box">
            <div class="header__box-logo">
              <img src="public/images/badminton_logo_by_asphire_d27yxxp-fullview.jpg" alt="" class="header__box-logo-img">
            </div>

            <div class="header__box-contact">
              <i class="fa-sharp fa-solid fa-phone"></i>
              <span class="header__box-contact-hotline">Hotline:</span>
              <a href="tel:0857272139" class="header__box-contact-number">0857272139</a>
            </div>

            <div class="header__box-address">
              <i class="header__box-address-icon fa-solid fa-map-location-dot"></i>
              <span class="header__box-address-info">
                <a href="" class="header__box-address-info--link">
                  Hệ thống cửa hàng
                </a>
              </span>
            </div>

            <ul class="header__box-list">
              <li class="header__box-item header__box-item-has-notify">
                <a href="" class="header__box-item-link">
                  <i class="header__box-item-link-icon fa-regular fa-bell"></i>
                  <span class="header__box-item-link--detail">Thông báo</span>
                </a>

                <!-- Begin: Notification -->
                <div class="header__notify">
                  <header class="header__notify-header">
                    <h3>Thông báo mới nhận</h3>
                  </header>
                  <ul class="header__notify-list">

                    <li class="header__notify-item header__notify-item--viewed">
                      <a href="" class="header__notify-link">
                        <img src="https://shopvnb.com/uploads/images/2(9)(1).png" alt="" class="header__notify-img">
                        <div class="header__notify-body">
                          <span class="header__notify-name">Vợt cầu lông Yonex giảm giá 15%</span>
                          <span class="header__notify-desc">Vợt cầu lông chính hãng Yonex giảm giá 15% trên tất cả các đại lý. </span>
                        </div>
                      </a>
                    </li>

                    <li class="header__notify-item header__notify-item--viewed">
                      <a href="" class="header__notify-link">
                        <img src="https://shopvnb.com/uploads/gallery/Mizuno%20Fortius%2020.png" alt="" class="header__notify-img">
                        <div class="header__notify-body">
                          <span class="header__notify-name">Bạn đã thanh toán thành công 'Vợt cầu lông Mizuno X1'</span>
                          <span class="header__notify-desc">Cảm ơn bạn đã đặt 'Vợt cầu lông Fotius 11P'. Chúc bạn có những trải nghiệm tuyệt vời với mẫu vợt này.
                          </span>
                        </div>
                      </a>
                    </li>

                    <li class="header__notify-item header__notify-item--viewed">
                      <a href="" class="header__notify-link">
                        <img src="https://shopvnb.com/uploads/gallery/giay-cau-long-yonex-shb-65z3-momota-trang-bach-ho-new-2022.png" alt="" class="header__notify-img">
                        <div class="header__notify-body">
                          <span class="header__notify-name">Bạn đã thanh toán thành công 'Giày cầu lông SHB 65Z3'</span>
                          <span class="header__notify-desc">Cảm ơn bạn đã đặt 'Giày cầu lông SHB 65Z3'. Chúc bạn có những trải nghiệm tuyệt vời với mẫu giày này</span>
                        </div>
                      </a>
                    </li>

                  </ul>

                  <footer class="header__notify-footer">
                    <a href="" class="header__notify-see-all">Xem tất cả</a>
                  </footer>
                </div>
                <!-- End: Notification -->
              </li>

              <li class="header__box-item header__box-item-no-cart">
                <a href="?mod=cart&controller=index&action=index" class="header__box-item-link">
                  <i class="header__box-item-link-icon fa-solid fa-cart-shopping"></i>
                  <span class="header__box-item-link--detail">Giỏ hàng</span>
                </a>

                <?php
                $list_buy = get_list_buy_cart();
                if (!empty($list_buy)) {
                ?>

                  <div class="header__box-item-cart have-product">
                    <span class="header__box-item-cart--title">Sản phẩm</span>
                    <?php
                    foreach ($list_buy as $item) {
                    ?>
                      <a href="?mod=product&controller=index&action=detail&id=<?php echo $item['id'] ?>" class="header__box-item-cart-link">
                        <img src="http://localhost/LHSports/admin/public/images/<?php echo $item['imgProduct']; ?>" alt="" class="header__box-item-cart-img-product">
                        <div class="header__box-item-cart--container">
                          <p class="header__box-item-cart--name-product"><?php echo $item['nameProduct'] ?></p>
                          <div class="header__box-item-cart--qty-and-price">
                            <span class="header__box-item-cart--qty">SL: <?php echo $item['qty']; ?></span>
                            <span class="header__box-item-cart--price">Giá: <?php echo currency_format($item['price']); ?></span>
                          </div>
                        </div>
                      </a>
                    <?php
                    }
                    ?>

                    <div class="header__box-item-cart--part-bottom">
                      <span class="header__box-item-cart--total-price">Tổng giá: <?php echo currency_format(get_total_cart()); ?></span>
                      <a href="?mod=cart&controller=index&action=checkout" class="pay">Thanh toán</a>
                    </div>

                  </div>

                <?php
                } else {
                ?>
                  <!-- Begin :Cart -->
                  <div class="header__box-item-cart">
                    <img src="public/images/no-cart.png" alt="No cart" class="header__box-item-cart-no-cart">
                    <p class="header__box-cart-no-cart-msg">
                      Chưa có sản phẩm
                    </p>
                  </div>
                  <!-- End :Cart -->
                <?php
                }
                ?>
              </li>

              <?php
              if (isset($_SESSION['user'])) {
              ?>
                <li class="header__box-item header__box-item--account">
                  <a href="" class="header__box-item-link">
                    <i class="header__box-item-link-icon fa-solid fa-user"></i>
                    <span class="header__box-item-link--detail"><?php echo $_SESSION['user']['name']; ?></span>
                  </a>
                  <div class="header__box-item-user">
                    <a href="?mod=users&controller=index&action=profile" class="header__box-item-user-account">
                      <i class="header__box-item-user-account-icon fa-solid fa-address-card"></i>
                      <span class="header__box-item-user--desc">Hồ sơ</span>
                    </a>

                    <a href="?mod=cart&controller=index&action=show_orders" class="header__box-item-user-account">
                      <i class="header__box-item-user-account-icon fa-solid fa-file-invoice-dollar"></i>
                      <span class="header__box-item-user--desc">Đơn hàng</span>
                    </a>

                    <a href="?mod=users&controller=index&action=logout" class="header__box-item-user-account">
                      <i class="header__box-item-user-account-icon fa-solid fa-arrow-right-from-bracket"></i>
                      <span class="header__box-item-user--desc">Đăng xuất</span>
                    </a>
                    
                  </div>
                </li>
              <?php
              } else {
              ?>
                <li class="header__box-item header__box-item--account">
                  <a href="" class="header__box-item-link">
                    <i class="header__box-item-link-icon fa-solid fa-user"></i>
                    <span class="header__box-item-link--detail">Tài khoản</span>
                  </a>

                  <!-- Begin: Sign up - Log in -->
                  <div class="header__box-item-user">
                    <a href="?mod=users&controller=index&action=reg" class="header__box-item-user-account">
                      <i class="header__box-item-user-account-icon fa-solid fa-arrow-right-to-bracket"></i>
                      <span class="header__box-item-user--desc">Đăng ký</span>
                    </a>

                    <a href="?mod=users&controller=index&action=login" class="header__box-item-user-account">
                      <i class="header__box-item-user-account-icon fa-solid fa-user-plus"></i>
                      <span class="header__box-item-user--desc">Đăng nhập</span>
                    </a>
                  </div>
                  <!-- End: Sign up - Log in -->
                </li>

              <?php
              }
              ?>

            </ul>
          </div>
          <!--End: Header Box -->
        </div>


        <!--Begin: Navigation -->
        <div class="header__nav">
          <div class="grid">
            <ul class="header__nav-list">
              <li class="header__nav-item">
                <a href="?mod=home&controller=index&action=index" class="header__nav-item--link">
                  Trang chủ
                </a>
              </li>

              <li class="header__nav-item header__nav-item--product">
                <a href="?mod=product&controller=index&action=index" class="header__nav-item--link">
                  Sản phẩm
                </a>

                <!-- Product list -->
                <div class="header__nav--product">

                  <div class="header__nav--product-detail">
                    <h3 class="header__nav--product-heading">
                      Vợt cầu lông
                    </h3>
                    <ul class="header__nav--product-list">
                      <li class="header__nav--product-item">
                        <a href="" class="header__nav--product-link">
                          Vợt cầu lông Mizuno
                        </a>
                      </li>
                      <li class="header__nav--product-item">
                        <a href="" class="header__nav--product-link">
                          Vợt cầu lông Yonex
                        </a>
                      </li>
                      <li class="header__nav--product-item">
                        <a href="" class="header__nav--product-link">
                          Vợt cầu lông Lining
                        </a>
                      </li>
                      <li class="header__nav--product-item">
                        <a href="" class="header__nav--product-link">
                          Vợt cầu lông Victor
                        </a>
                      </li>
                      <li class="header__nav--product-item">
                        <a href="" class="header__nav--product-link">
                          Vợt cầu lông Proace
                        </a>
                      </li>
                    </ul>

                    <div class="header__nav--product-see-all">
                      <a href="" class="header__nav--product-see-all-link">
                        Xem tất cả
                      </a>
                    </div>
                  </div>

                  <div class="header__nav--product-detail">
                    <h3 class="header__nav--product-heading">
                      Giày cầu lông
                    </h3>
                    <ul class="header__nav--product-list">
                      <li class="header__nav--product-item">
                        <a href="" class="header__nav--product-link">
                          Giày cầu lông Yonex
                        </a>
                      </li>
                      <li class="header__nav--product-item">
                        <a href="" class="header__nav--product-link">
                          Giày cầu lông Victor
                        </a>
                      </li>
                      <li class="header__nav--product-item">
                        <a href="" class="header__nav--product-link">
                          Giày cầu lông Mizuno
                        </a>
                      </li>
                      <li class="header__nav--product-item">
                        <a href="" class="header__nav--product-link">
                          Giày cầu lông Lining
                        </a>
                      </li>
                      <li class="header__nav--product-item">
                        <a href="" class="header__nav--product-link">
                          Giày cầu lông Kawasaki
                        </a>
                      </li>
                    </ul>

                    <div class="header__nav--product-see-all">
                      <a href="" class="header__nav--product-see-all-link">
                        Xem tất cả
                      </a>
                    </div>
                  </div>

                  <div class="header__nav--product-detail">
                    <h3 class="header__nav--product-heading">Balo cầu lông</h3>
                    <ul class="header__nav--product-list">
                      <li class="header__nav--product-item">
                        <a href="" class="header__nav--product-link">
                          Balo cầu lông Yonex
                        </a>
                      </li>
                      <li class="header__nav--product-item">
                        <a href="" class="header__nav--product-link">
                          Balo cầu lông Kawasaki
                        </a>
                      </li>
                      <li class="header__nav--product-item">
                        <a href="" class="header__nav--product-link">
                          Balo cầu lông Victor
                        </a>
                      </li>
                      <li class="header__nav--product-item">
                        <a href="" class="header__nav--product-link">
                          Balo cầu lông Lining
                        </a>
                      </li>
                    </ul>

                    <div class="header__nav--product-see-all">
                      <a href="" class="header__nav--product-see-all-link">
                        Xem tất cả
                      </a>
                    </div>

                  </div>


                  <div class="header__nav--product-detail">
                    <h3 class="header__nav--product-heading">Túi vợt cầu lông</h3>
                    <ul class="header__nav--product-list">
                      <li class="header__nav--product-item">
                        <a href="" class="header__nav--product-link">
                          Túi vợt Yonex
                        </a>
                      </li>
                      <li class="header__nav--product-item">
                        <a href="" class="header__nav--product-link">
                          Túi vợt Mizuno
                        </a>
                      </li>
                      <li class="header__nav--product-item">
                        <a href="" class="header__nav--product-link">
                          Túi vợt Lining
                        </a>
                      </li>
                    </ul>

                    <div class="header__nav--product-see-all">
                      <a href="" class="header__nav--product-see-all-link">
                        Xem tất cả
                      </a>
                    </div>

                  </div>

                  <div class="header__nav--product-detail">
                    <h3 class="header__nav--product-heading">Phụ kiện cầu lông</h3>
                    <ul class="header__nav--product-list">
                      <li class="header__nav--product-item">
                        <a href="" class="header__nav--product-link">
                          Cuớc cầu lông
                        </a>
                      </li>
                      <li class="header__nav--product-item">
                        <a href="" class="header__nav--product-link">
                          Vớ cầu lông
                        </a>
                      </li>
                    </ul>

                    <div class="header__nav--product-see-all">
                      <a href="" class="header__nav--product-see-all-link">
                        Xem tất cả
                      </a>
                    </div>
                  </div>
                </div>
              </li>

              <li class="header__nav-item">
                <a href="?mod=news&controller=index&action=index" class="header__nav-item--link">
                  Tin tức
                </a>
              </li>

              <li class="header__nav-item">
                <a href="?mod=pages&controller=introduce&action=index" class="header__nav-item--link">
                  Giới thiệu
                </a>
              </li>

              <li class="header__nav-item">
                <a href="?mod=pages&controller=contact&action=index" class="header__nav-item--link">
                  Liên hệ
                </a>
              </li>

              <form action="?mod=product&controller=index&action=search" method="POST" class="header__nav-item header__nav-item--search">
                <input type="text" name="search" class="header__nav-item--search-input" placeholder="Sản phẩm cần tìm?">
                <!-- History search -->
                <div class="header__nav--search-history">
                  <h3 class="header__nav--search-history-heading">
                    <i class="header__nav--search-history-icon fa-sharp fa-solid fa-fire"></i>
                    Được tìm kiếm nhiều nhất
                  </h3>
                  <ul class="header__nav--search-history-list">
                    <li class="header__nav--search-history-item">
                      <a href="" class="header__nav--search-history-link">Vợt cầu lông</a>
                    </li>
                    <li class="header__nav--search-history-item">
                      <a href="" class="header__nav--search-history-link">Giày cầu lông</a>
                    </li>
                  </ul>
                </div>

                <button type="submit" name="btn-search" class="header__nav-item--search-btn">
                  <i class="header__nav-item--search-btn-icon fa-solid fa-magnifying-glass"></i>
                </button>
              </form>

            </ul>
          </div>
        </div>
        <!--End: Navigation -->

      </header>