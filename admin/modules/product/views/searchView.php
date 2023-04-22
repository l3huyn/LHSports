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
        <h5 class="m-0 ">Sản phẩm bạn tìm</h5>
        <div class="form-search form-inline">
          <form method="POST" action="?mod=product&controller=index&action=search">
            <input type="text" name="search" class="form-control form-search" placeholder="Tìm kiếm">
            <input type="submit" name="btn-search-product" value="Tìm kiếm" class="btn btn-primary" style="margin-top: 4px;">
          </form>
        </div>
      </div>
      <?php
      if (!empty($list_product)) {
      ?>
        <div class="card-body">
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
              foreach ($list_product as $product) {
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

      <?php
      } else {
      ?>
        <div class="no-product-in-search">
          <p class="no-product-in-search-notify">Không có sản phẩm cần tìm</p>
        </div>
      <?php
      }
      ?>

    </div>
  </div>
</div>


<?php
get_footer();
?>