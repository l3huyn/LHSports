<?php
get_header();

$count_available_product = get_number_available_product();
foreach($count_available_product as $product) {
  $available_product = $product['COUNT'];
}

$count_unavailable_product = get_number_unavailable_product();
foreach($count_unavailable_product as $product) {
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
        <form action="?mod=product&controller=index&action=cat_product" method="POST" class="form-action form-inline py-3">
          <span style="margin-right: 10px; font-weight: bold;">Danh mục</span>
          <select name="filter" class="filter-product mr-1">
            <option value="">---Chọn---</option>
            <option class="filter-product-option" value="racket">Vợt cầu lông</option>
            <option class="filter-product-option" value="shoes">Giày cầu lông</option>
            <option class="filter-product-option" value="bag">Túi vợt cầu lông</option>
            <option class="filter-product-option" value="balo">Balo cầu lông</option>
            <option class="filter-product-option" value="accessory">Phụ kiện cầu lông</option>
            <option class="filter-product-option" value="shirt">Áo cầu lông</option>
            <option class="filter-product-option" value="shorts">Quần cầu lông</option>
            <option class="filter-product-option" value="sportdress">Váy cầu lông</option>
          </select>
          <input type="submit" name="btn-filter" value="Áp dụng" class="btn btn-primary">
        </form>
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
            $i = 0;
            foreach ($list_product_by_status as $product) {
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
            ?>
          </tbody>
        </table>

        <!-- Pagging -->

      </div>
    </div>
  </div>
</div>


<?php
get_footer();
?>