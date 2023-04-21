<?php
get_header();
?>

<?php
$id_customer = $_SESSION['user']['id'];
$id = get_id_detail_order();
// show_array($info_order);
?>

<div class="grid wide">
	<?php
	if (check_order($id_customer)) {
	?>
		<div class="row ">
			<div class="col-3 fs-3 pb-4" data-aos="fade-right">
				<div class="intro-heading p-4 pt-0">
					<span style="font-size: 20px;" class="font-weight-bold text-center">LOẠI</span>
				</div>
				<div data-aos="fade-right">
					<ul style="list-style: none;">
						<li><a style="font-size: 16px;" class="" href="">Tất cả</a> </li>

						<li class="bill-name-type d-flex align-items-center">
							<a style="font-size: 16px;" class="" href="">Đang xác nhận</a>
						</li>

						<li class="bill-name-type d-flex align-items-center">
							<a style="font-size: 16px;" class="" href="">Đang vận chuyển</a>
						</li>

						<li class="bill-name-type d-flex align-items-center ">
							<a style="font-size: 16px;" class="" href="">Đã giao</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="col-9 px-4" data-aos="fade-left">
				<div class="intro-heading p-4 pt-0">
					<span style="font-size: 20px;" class="font-weight-bold">ĐƠN HÀNG</span>
				</div>
				<?php
				foreach ($id as $id_orders) {
					$id_order = $id_orders['ID'];
					$orders = get_list_order($id_order, $id_customer);
				?>

					<div class="bill-section mb-5 border-main" data-aos="fade-left">
						<div style="border-bottom: 3px solid rgb(47, 47, 162);" class="d-flex justify-content-end p-3">
						</div>
						<ul style="padding-left: 0;" class="fs-4 bill-list-pro">

							<?php
							foreach ($orders as $order) {
							?>

								<li class="row mx-0 p-3 bill-item-pro">
									<div class="col-2">
										<img width="60px" class="border-main" src="http://localhost/LHSports/admin/public/images/<?php echo $order['img_product']; ?>" alt="">
									</div>
									<div class="col-8" style="font-size: 16px;">
										<a href="?mod=product&controller=index&action=detail&id=<?php echo $order['id_product']; ?>" title="" class="name-product "> <?php echo $order['name_product']; ?></a>
										<span class="d-block">x <?php echo $order['qty_product']; ?></span>
									</div>
									<div style="font-size: 16px;" class="mb-5 text-color-primary col-2 d-flex justify-content-end align-items-md-center"> <?php echo currency_format($order['sub_total']); ?></div>
									<div>
									</div>
								</li>

							<?php
							}
							?>
						</ul>


						<div style="border-bottom: 3px solid rgb(47, 47, 162);" class="fs-3 p-3 pe-5 bill-total">
							<?php
							$info_order = get_info_order($id_order);
							foreach ($info_order as $info) {
							?>
								<div class='order-bottom'>
									<span style="font-size: 20px; color: #F64C72;" class="fs-3"><?php echo $info['status_order'] ?></span>
									<span style="font-size: 18px; font-weight: 600; color: rgb(47, 47, 162);" class="text-color-main fw-bold fs-2">Tổng số tiền: <?php echo currency_format($info['total_price']); ?></span>
								</div>
							<?php
							}
							?>

						</div>

					</div>
				<?php
				}
				?>
			</div>
		</div>

	<?php
	} else {
	?>

		<div class="no-order-container">
			<i class="icon-sad fa-solid fa-face-frown fa-bounce"></i>
			<p class="no-order-notify">Không có đơn hàng, click <a href="?mod=product&controller=index&action=index">vào đây</a> để mua sắm</p>
		</div>

	<?php
	}
	?>
</div>

<?php
get_footer();
?>