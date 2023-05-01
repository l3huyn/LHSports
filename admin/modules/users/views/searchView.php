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
        <h5 class="m-0 ">Danh sách thành viên</h5>
        <div class="form-search form-inline">
          <form method="POST" action="?mod=users&controller=index&action=search">
            <input type="text" name="key-search" class="form-control form-search" placeholder="Tìm kiếm">
            <input type="submit" name="btn-search-user" value="Tìm kiếm" class="btn btn-primary">
          </form>
        </div>
      </div>
      <div class="card-body">
        <form action="?mod=users&controller=index&action=filter" method="POST" class="form-action form-inline py-3">
          <span style="margin-right: 10px; font-weight: bold;">Lọc theo</span>
          <select name="filter-user" class="filter-product mr-1">
            <option value="">---Chọn---</option>
            <option class="filter-product-option" value="Admintrator">Quản trị viên</option>
            <option class="filter-product-option" value="Customer">Khách hàng</option>
          </select>
          <input type="submit" name="btn-filter-user" value="Áp dụng" class="btn btn-primary">
        </form>
        <table class="table table-striped table-checkall text-center">
          <thead>
            <tr>
              <th scope="col">STT</th>
              <th scope="col">Ảnh đại diện</th>
              <th scope="col">Họ tên</th>
              <th scope="col">Username</th>
              <th scope="col">Email</th>
              <th scope="col">Quyền</th>
              <th scope="col">Tác vụ</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 0;
            foreach ($list_user as $user) {
              $i++
            ?>
              <tr>
                <th scope="row"><?php echo $i; ?></th>
                <td><img style="width: 80px; height: 80px; object-fit:cover; border: 3px solid #ccc;" src="http://localhost/LHSports/public/img-user/<?php echo $user['imgUser'] ?>" alt=""></td>
                <td><?php echo $user['name'] ?></td>
                <td><?php echo $user['username'] ?></td>
                <td><?php echo $user['emailUser'] ?></td>
                <td><?php echo $user['authority'] ?></td>
                <td>
                  <a href="?mod=users&controller=index&action=edit&id=<?php echo $user['id'] ?>" class="btn btn-success btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                  <a href="?mod=users&controller=index&action=delete&id=<?php echo $user['id'] ?>" class="btn btn-danger btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
            <?php
            }
            ?>

          </tbody>
        </table>
        <nav aria-label="Page navigation example">
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
        </nav>
      </div>
    </div>
  </div>
</div>

<?php
get_footer();
?>