<?php
get_header();
?>

<div class="grid">
    <?php
    if (!empty($list_buy)) {
    ?>
        <div id="main-content-wp" class="cart-page">
            <div class="section" id="breadcrumb-wp">
                <div class="wp-inner">
                    <div class="section-detail">
                        <h3 class="title">Giỏ hàng</h3>
                    </div>
                </div>
            </div>
            <div id="wrapper" class="wp-inner clearfix">

                <div class="section" id="info-cart-wp">
                    <div class="section-detail table-responsive">

                        <form action="?mod=cart&controller=index&action=update" method="POST">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td>Thuơng hiệu</td>
                                        <td>Ảnh sản phẩm</td>
                                        <td>Tên sản phẩm</td>
                                        <td>Giá sản phẩm</td>
                                        <td>Số lượng</td>
                                        <td>Thành tiền</td>
                                        <td>Thao tác</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <form action="?mod=cart&controller=index&action=update" method="POST">
                                        <?php
                                        foreach ($list_buy as $item) {
                                        ?>
                                            <tr>
                                                <td>
                                                    <?php echo $item['brand'] ?>
                                                </td>

                                                <td>
                                                    <a href="?mod=product&act=detail&id=<?php echo $item['id'] ?>" class="thumb">
                                                        <img style="width: 100%; height: 100%;" src="public/imgProduct/<?php echo $item['imgProduct'] ?>" alt="">
                                                    </a>
                                                </td>

                                                <td>
                                                    <a href="?mod=product&controller=index&action=detail&id=<?php echo $item['id'] ?>" class="name-product">
                                                        <?php echo $item['nameProduct']; ?>
                                                    </a>
                                                </td>

                                                <td>
                                                    <?php echo currency_format($item['price']); ?>
                                                </td>
                                                <td>
                                                    <input type="number" id="qty-product" name="qty[<?php echo $item['id'] ?>]" min="1" max="50" value="<?php echo $item['qty']; ?>" class="num-order">
                                                </td>
                                                <td>
                                                    <p id="price-product"><?php echo currency_format($item['sub_total']) ?></p>
                                                </td>
                                                <td>
                                                    <a href="?mod=cart&controller=index&action=delete&id=<?php echo $item['id'] ?>" title="" class="del-product"><i class="fa-solid fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                </tbody>
                            </table>
                            <div class='showCart_foot'>
                                <tr>
                                    <td colspan="7">
                                        <div class="clearfix">
                                            <p id="total-price" class="fl-right">Tổng giá: <?php echo currency_format(get_total_cart()) ?><span></span></p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="7">
                                        <div class="clearfix">
                                            <div class="fl-right">
                                                <input type="submit" name="btn-update-cart" id="update-cart" value="Cập nhật giỏ hàng"></input>
                                                <a href="?mod=cart&controller=index&action=checkout" title="" id="checkout-cart">Thanh toán</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="section" id="action-cart-wp">
                    <div class="section-detail">
                        <p class="title">Click vào <span>“Cập nhật giỏ hàng”</span> để cập nhật số lượng. Nhấn vào thanh toán để hoàn tất mua hàng.</p>
                        <a href="?mod=product&controller=index&action=index" title="" id="buy-more">Mua tiếp</a><br />
                        <a href="?mod=cart&controller=index&action=delete_all" title="" id="delete-cart">Xóa giỏ hàng</a>
                    </div>
                </div>
            </div>
        </div>
    <?php
    } else {
    ?>
        <div class="no-cart-container">
            <i class="icon-sad fa-solid fa-face-frown fa-bounce"></i>
            <p class="no-cart-notify">Không có sản phẩm nào trong giỏ hàng, click <a href="?mod=product&controller=index&action=index">vào đây</a> để mua sắm</p>
        </div>
    <?php
    }
    ?>
</div>

<?php
get_footer();
?>