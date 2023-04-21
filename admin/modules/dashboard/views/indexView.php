<?php
get_header();

//Lay so don thanh cong
$order_success = get_orders_success();
foreach($order_success as $item) {
  $count_order_success = $item['COUNT'];
}

//Lay so don dang xu ly
$order_processing = get_orders_processing();
foreach($order_processing as $item) {
  $count_order_processing = $item['COUNT'];
}

//Lay tong doanh so
$total_revenue = get_total_revenue();
foreach($total_revenue as $item) {
  $revenue = $item['REVENUE'];
}

//Lay so don bi huy
$order_cancelled = get_order_cancelled();
foreach($order_cancelled as $item) {
  $count_order_cancelled = $item['COUNT'];
}


if(isset($_GET['id'])) {
  $id_order = $_GET['id'];
}

?>
<?php
get_sidebar();
?>
<div id="wp-content">
  <div class="container-fluid py-5">
    <div class="row">
      <div class="col">
        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
          <div class="card-header">ĐƠN HÀNG THÀNH CÔNG</div>
          <div class="card-body">
            <h5 class="card-title"><?php  echo $count_order_success; ?></h5>
            <p class="card-text">Đơn hàng giao dịch thành công</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-header">ĐANG XỬ LÝ</div>
          <div class="card-body">
            <h5 class="card-title"><?php  echo $count_order_processing; ?></h5>
            <p class="card-text">Số lượng đơn hàng đang xử lý</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
          <div class="card-header">DOANH SỐ</div>
          <div class="card-body">
            <h5 class="card-title"><?php  echo currency_format($revenue); ?></h5>
            <p class="card-text">Doanh số hệ thống</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
          <div class="card-header">ĐƠN HÀNG HỦY</div>
          <div class="card-body">
            <h5 class="card-title"><?php  echo $count_order_cancelled; ?></h5>
            <p class="card-text">Số đơn bị hủy trong hệ thống</p>
          </div>
        </div>
      </div>
    </div>
    <!-- end analytic  -->
    <div class="card">
      <div class="card-header font-weight-bold">
        ĐƠN HÀNG
      </div>
      <div class="card-body">
        <table class="table table-striped text-center">
          <thead>
            <tr>
              <th scope="col">STT</th>
              <th scope="col">Mã đơn</th>
              <th scope="col">Khách hàng</th>
              <th scope="col">Số điện thoại</th>
              <th scope="col">Số lượng</th>
              <th scope="col">Tổng tiền</th>
              <th scope="col">Trạng thái</th>
              <th scope="col">Thời gian</th>
              <th scope="col">Ghi chú</th>
              <th scope="col">Tác vụ</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 0;
            foreach ($list_orders as $order) {
              $i++;
            ?>
              <tr>
                <th scope="row"><?php echo $i; ?></th>
                <td><?php echo $order['id_order']; ?></td>
                <td>
                  <?php echo $order['name_customer']; ?> <br>
                </td>
                <td><a href="#"><?php echo $order['phone_customer']; ?></a></td>
                <td><?php echo $order['total_qty']; ?></td>
                <td><?php echo currency_format($order['total_price']); ?></td>
                <td><span class="badge badge-warning"><?php echo $order['status_order']; ?></span></td>
                <td><?php echo $order['created_at']; ?></td>
                <td><?php echo $order['note_customer']; ?></td>
                <td>
                  <a href="?mod=dashboard&controller=index&action=detail_order&id=<?php echo $order['id_order']; ?>" class="btn btn-warning btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Show"><i class="fa-solid fa-eye"></i></a>

                  <a href="?mod=dashboard&controller=index&action=edit&id=<?php echo $order['id_order']; ?>" class="btn btn-success btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                  
                  <a href="?mod=dashboard&controller=index&action=delete&id=<?php echo $order['id_order']; ?>" class="btn btn-danger btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
        <!-- <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">Trước</span>
                <span class="sr-only">Sau</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav> -->
      </div>
    </div>

  </div>
</div>

<?php
get_footer();
?>