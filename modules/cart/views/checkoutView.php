<?php
get_header();
// show_array($_SESSION['cart']['buy']);
?>

<div id="main-content-wp" class="checkout-page ">
  <div class="wp-inner clearfix">
    <div class="grid">
      <div id="content" class="fl-right">
        <div class="section" id="checkout-wp">
          <div class="section-head">
            <h3 class="section-title checkout-title">Thanh toán</h3>
          </div>
          <div class="section-detail">
            <div class="wrap clearfix">

              <form action="?mod=cart&controller=index&action=order" class="main-checkout" method="POST">
                <div id="custom-info-wp" class="fl-left">
                  <h3 class="title">Thông tin khách hàng</h3>
                  <div class="detail">
                    <div class="field-wp">
                      <label>Họ tên</label>
                      <input style="font-size: 16px; padding: 5px;" value="<?php if (!empty($_SESSION['user']['name'])) echo $_SESSION['user']['name']; ?>" style="padding: 10px 0;" type="text" name="fullname" id="fullname">
                      <p class="text-danger" style="font-size: 16px;"><?php if (!empty($error)) echo $error['fullname'] ?></p>
                    </div>

                    <div class="field-wp">
                      <label>Email</label>
                      <input style="font-size: 16px; padding: 5px;" style="padding: 10px 0;" type="email" name="email" id="email" value="<?php if (!empty($_SESSION['user']['email'])) echo $_SESSION['user']['email']; ?>">
                      <p class="text-danger" style="font-size: 16px;"><?php if (!empty($error)) echo $error['email'] ?></p>
                    </div>

                    <div class="field-wp">
                      <label>Địa chỉ nhận hàng</label>
                      <input style="font-size: 16px; padding: 5px;" style="padding: 10px 0;" type="text" name="address" id="address" value="<?php if (!empty($_SESSION['user']['address'])) echo $_SESSION['user']['address']; ?>">
                      <p class="text-danger" style="font-size: 16px;"><?php if (!empty($error)) echo $error['address'] ?></p>
                    </div>

                    <div class="field-wp">
                      <label>Số điện thoại</label>
                      <input style="font-size: 16px; padding: 5px;" value="<?php if (!empty($_SESSION['user']['cellphone'])) echo $_SESSION['user']['cellphone']; ?>" style="padding: 10px 0;" type="tel" name="cellphone" id="cellphone">
                      <p class="text-danger" style="font-size: 16px;"><?php if (!empty($error)) echo $error['cellphone'] ?></p>
                    </div>
                    
                    <div class="field-full-wp">
                      <label>Ghi chú</label>
                      <textarea style="font-size: 16px; padding: 5px;" name="note"></textarea>
                    </div>
                  </div>
                </div>

                <div id="order-review-wp" class="fl-right">
                  <h3 class="title">Thông tin đơn hàng</h3>
                  <div class="detail">
                    <table class="shop-table">
                      <thead>
                        <tr>
                          <td style="font-size: 16px; font-weight: 600;">Sản phẩm</td>
                          <td style="font-size: 16px; font-weight: 600;">Tổng</td>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        foreach ($list_buy as $item) {
                        ?>
                          <tr class="cart-item">
                            <td style="font-size: 15px; color: #F64C72" class="product-name"><?php echo $item['nameProduct'] ?><strong style="font-size: 16px;" class="product-quantity">x <?php echo $item['qty'] ?></strong></td>
                            <td style="font-size: 16px; font-weight: 600;" class="product-total"><?php echo currency_format($item['sub_total']) ?></td>
                          </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                      <tfoot>
                        <tr class="order-total">
                          <td>Tổng đơn hàng:</td>
                          <td><strong class="total-price"><?php echo currency_format(get_total_cart()) ?></strong></td>
                        </tr>
                      </tfoot>
                    </table>
                    <div id="payment-checkout-wp">
                      <ul style="list-style: none ;" id="payment_methods">
                        <li>
                          <input checked type="radio" id="payment-cod" name="payment-method" value="payment-home">
                          <label for="payment-cod">Thanh toán COD</label>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="place-order-wp clearfix">
                    <input style="font-size: 16px;" value="Đặt hàng" type="submit" name="btn-order"></input>
                  </div>
                </div>
              </form>
              
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<?php
get_footer();
?>