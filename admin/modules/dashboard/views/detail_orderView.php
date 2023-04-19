<?php
get_header();
?>
<?php
get_sidebar();
?>
<div id="wp-content">
  <div class="container-fluid py-5">
    <div class="card">
      <div class="card-header font-weight-bold">
        CHI TIẾT ĐƠN HÀNG
      </div>
      <div class="card-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Mã đơn</th>
              <th scope="col">Khách hàng</th>
              <th scope="col">Tên sản phẩm</th>
              <th scope="col">Số lượng</th>
              <th scope="col">Giá</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($list_detail_order as $detail_order) {
            ?>
              <tr>

                <td><?php echo $detail_order['id_order']; ?></td>
                <td>
                  <?php echo $detail_order['name_customer']; ?> <br>
                </td>
                <td><?php echo $detail_order['name_product']; ?></td>
                <td><?php echo $detail_order['qty_product']; ?></td>
                <td><?php echo currency_format($detail_order['price_product']); ?></td>
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