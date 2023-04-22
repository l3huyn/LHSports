<?php
get_header();
?>

<?php
get_sidebar();
?>

<div id="wp-content">
  <div id="content" class="container-fluid">
    <div class="card">
      <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
        <h5 class="m-0 ">Đơn hàng bạn tìm</h5>
        <div class="form-search form-inline">
          <form action="?mod=order&controller=index&action=search" method="POST">
            <input type="text" name="key-search" class="form-control form-search" placeholder="Tìm kiếm theo tên khách hàng">
            <input type="submit" name="btn-search-order" value="Tìm kiếm" class="btn btn-primary">
          </form>
        </div>
      </div>
      <div class="card-body">
        <div class="analytic">
          <a href="?mod=order&controller=index&action=status_order&status=processing" class="text-primary">Đang xử lý<span class="text-muted">(10)</span></a>
          <a href="?mod=order&controller=index&action=status_order&status=delivered" class="text-primary">Đã giao<span class="text-muted">(5)</span></a>
        </div>
        <form action="?mod=order&controller=index&action=filter" method=POST class="form-action form-inline py-3">
          <span style="margin-right: 10px; font-weight: bold;">Sắp xếp theo</span>
          <select name="filter-order" class="form-control mr-1">
            <option>---Chọn---</option>
            <option value="newest">Ngày đặt mới nhất</option>
            <option value="oldest">Ngày đặt cũ nhất</option>
          </select>
          <input type="submit" name="btn-filter-order" value="Áp dụng" class="btn btn-primary">
        </form>
        <table class="table table-striped table-checkall text-center">
          <thead>
            <tr>
              <th scope="col">STT</th>
              <th scope="col">Mã đơn</th>
              <th scope="col">Khách hàng</th>
              <th scope="col">Số điện thoại</th>
              <th scope="col">Tổng số lượng</th>
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
            foreach ($list_order as $order) {
              $i++;
            ?>
              <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $order['id_order'] ?></td>
                <td>
                  <?php echo $order['name_customer'] ?>
                </td>
                <td><?php echo $order['phone_customer'] ?></td>
                <td><?php echo $order['total_qty'] ?></td>
                <td><?php echo currency_format($order['total_price']) ?></td>
                <td><span class="badge badge-warning"><?php echo $order['status_order'] ?></span></td>
                <td><?php echo $order['created_at'] ?></td>
                <td><?php echo $order['note_customer'] ?></td>
                <td>
                  <a href="?mod=order&controller=index&action=detail_order&id=<?php echo $order['id_order']; ?>" class="btn btn-warning btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Show"><i class="fa-solid fa-eye"></i></a>

                  <a href="?mod=order&controller=index&action=edit&id=<?php echo $order['id_order']; ?>" class="btn btn-success btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>

                  <a href="?mod=order&controller=index&action=delete&id=<?php echo $order['id_order']; ?>" class="btn btn-danger btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
            <?php
            }
            ?>


          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>


<?php
get_footer();
?>