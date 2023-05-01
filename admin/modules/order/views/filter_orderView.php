<?php
get_header();

if(isset($_GET['filter'])) {
  $filter = $_GET['filter'];
}
?>

<?php
get_sidebar();
?>

<div id="wp-content">
  <div id="content" class="container-fluid">
    <div class="card">
      <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
        <h5 class="m-0 ">Danh sách đơn hàng</h5>
        <div class="form-search form-inline">
          <form action="?mod=order&controller=index&action=search" method="POST">
            <input type="text" name="key-search" class="form-control form-search" placeholder="Tìm kiếm theo tên khách hàng">
            <input type="submit" name="btn-search-order" value="Tìm kiếm" class="btn btn-primary">
          </form>
        </div>
      </div>
      <div class="card-body">
        <div class="admin-filter mt-3">
          <span class="admin-filter__label">Sắp xếp theo</span>
          <div class="select-input">
            <span class="select-input__label">---Chọn---</span>
            <i class="select-input__icon fa-solid fa-angle-down"></i>

            <!-- List option -->
            <ul class="select-input__list">
              <li class="select-input__item">
                <a href="?mod=order&controller=index&action=filter_order&filter=oldest" class="select-input__item-link">
                  Cũ nhất
                </a>
              </li>
              <li class="select-input__item">
                <a href="?mod=order&controller=index&action=filter_order&filter=newest" class="select-input__item-link">
                  Mới nhất
                </a>
              </li>

            </ul>
          </div>
        </div>
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
            if (!empty($list_order)) {
              //----------PAGGING----------//
              #Số bản ghi trên một trang
              $num_per_page = 5;
              #Tổng số bản ghi
              $total_row = count($list_order);
              #Số trang
              $num_page = ceil($total_row / $num_per_page);
              #Số trang hiện tại lấy từ URL xuống
              $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
              #Chỉ số miền bắt đầu mỗi trang
              $start = ($page - 1) * $num_per_page;
              $list_order_by_page = array_slice($list_order, $start, $num_per_page);

              $i = $start;
              foreach ($list_order_by_page as $order) {
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
            }
            ?>


          </tbody>
        </table>

        <?php
        if (!empty($list_order)) {
          echo get_pagging($num_page, $page, "?mod=order&controller=index&action=filter_order&filter={$filter}");
        }
        ?>

      </div>
    </div>
  </div>
</div>


<?php
get_footer();
?>