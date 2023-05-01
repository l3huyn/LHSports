<?php
get_header();

if (isset($_GET['status'])) {
  $status = $_GET['status'];
}

$count_available_product = get_number_available_product();
foreach ($count_available_product as $product) {
  $available_product = $product['COUNT'];
}

$count_unavailable_product = get_number_unavailable_product();
foreach ($count_unavailable_product as $product) {
  $unavailable_product = $product['COUNT'];
}

?>

<?php
get_sidebar();
?>

<div id="wp-content">
  <div id="content" class="container-fluid">
    <div class="card">
      <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
        <h5 class="m-0 ">Danh sách sản phẩm</h5>
        <div class="form-search form-inline">
          <form method="POST" action="?mod=product&controller=index&action=search">
            <input type="text" name="search" class="form-control form-search" placeholder="Tìm kiếm">
            <input type="submit" name="btn-search-product" value="Tìm kiếm" class="btn btn-primary" style="margin-top: 4px;">
          </form>
        </div>
      </div>
      <div class="card-body">
        <div class="analytic">
          <a href="?mod=product&controller=index&action=status_product&status=available" class="text-primary">Còn hàng<span class="text-muted">(<?php echo $available_product ?>)</span></a>
          <a href="?mod=product&controller=index&action=status_product&status=unavailable" class="text-primary">Hết hàng<span class="text-muted">(<?php echo $unavailable_product ?>)</span></a>
        </div>
        <div class="admin-filter mt-3">
          <span class="admin-filter__label">Sắp xếp theo</span>
          <div class="select-input">
            <span class="select-input__label">---Chọn---</span>
            <i class="select-input__icon fa-solid fa-angle-down"></i>

            <!-- List option -->
            <ul class="select-input__list">
              <li class="select-input__item">
                <a href="?mod=product&controller=index&action=cat_product&cat=racket" class="select-input__item-link">
                  Vợt cầu lông
                </a>
              </li>
              <li class="select-input__item">
                <a href="?mod=product&controller=index&action=cat_product&cat=shoes" class="select-input__item-link">
                  Giày cầu lông
                </a>
              </li>
              <li class="select-input__item">
                <a href="?mod=product&controller=index&action=cat_product&cat=bag" class="select-input__item-link">
                  Túi vợt cầu lông
                </a>
              </li>
              <li class="select-input__item">
                <a href="?mod=product&controller=index&action=cat_product&cat=accessory" class="select-input__item-link">
                  Phụ kiện cầu lông
                </a>
              </li>
              <li class="select-input__item">
                <a href="?mod=product&controller=index&action=cat_product&cat=balo" class="select-input__item-link">
                  Balo cầu lông
                </a>
              </li>
              <li class="select-input__item">
                <a href="?mod=product&controller=index&action=cat_product&cat=shirt" class="select-input__item-link">
                  Áo cầu lông
                </a>
              </li>
              <li class="select-input__item">
                <a href="?mod=product&controller=index&action=cat_product&cat=shorts" class="select-input__item-link">
                  Quần cầu lông
                </a>
              </li>
              <li class="select-input__item">
                <a href="?mod=product&controller=index&action=cat_product&cat=sportdress" class="select-input__item-link">
                  Váy cầu lông
                </a>
              </li>
            </ul>
          </div>
        </div>
        <table class="table table-striped table-checkall text-center">
          <thead>
            <tr>
              <th scope="col">STT</th>
              <th scope="col">Ảnh</th>
              <th scope="col">Tên sản phẩm</th>
              <th scope="col">Thương hiệu</th>
              <th scope="col">Giá</th>
              <th scope="col">Trạng thái</th>
              <th scope="col">Tác vụ</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if (!empty($list_product_by_status)) {
              //----------PAGGING----------//
              #Số bản ghi trên một trang
              $num_per_page = 4;
              #Tổng số bản ghi
              $total_row = count($list_product_by_status);
              #Số trang
              $num_page = ceil($total_row / $num_per_page);
              #Số trang hiện tại lấy từ URL xuống
              $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
              #Chỉ số miền bắt đầu mỗi trang
              $start = ($page - 1) * $num_per_page;
              $list_product_by_page = array_slice($list_product_by_status, $start, $num_per_page);

              $i = $start;
              foreach ($list_product_by_page as $product) {
                $i++;
            ?>
                <tr>
                  <td><?php echo $i ?></td>
                  <td><img style="width: 80px; height: 80px; object-fit:cover; border: 3px solid #ccc;" src="http://localhost/LHSports/admin/public/images/<?php echo $product['imgProduct'] ?>" alt=""></td>
                  <td><a href=""><?php echo $product['nameProduct'] ?></a></td>
                  <td><?php echo $product['brandProduct'] ?></td>
                  <td><?php echo currency_format($product['priceProduct'])  ?></td>
                  <td><span class="badge badge-success"><?php echo $product['statusProduct'] ?></span></td>
                  <td>
                    <a href="?mod=product&controller=index&action=detail&id=<?php echo $product['id']; ?>" class="btn btn-warning btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Show"><i class="fa-solid fa-eye"></i></a>
                    <a href="?mod=product&controller=index&action=edit&id=<?php echo $product['id'] ?>" class="btn btn-success btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                    <a href="?mod=product&controller=index&action=delete&id=<?php echo $product['id'] ?>" class="btn btn-danger btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
            <?php
              }
            }
            ?>
          </tbody>
        </table>

        <?php
        if (!empty($list_product_by_status)) {
          echo get_pagging($num_page, $page, "?mod=product&controller=index&action=status_product&status={$status}");
        }
        ?>

      </div>
    </div>
  </div>
</div>


<?php
get_footer();
?>