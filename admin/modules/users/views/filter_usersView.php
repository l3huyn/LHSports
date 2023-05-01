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
        <div class="admin-filter mt-3">
          <span class="admin-filter__label">Sắp xếp theo</span>
          <div class="select-input">
            <span class="select-input__label">---Chọn---</span>
            <i class="select-input__icon fa-solid fa-angle-down"></i>

            <!-- List option -->
            <ul class="select-input__list">
              <li class="select-input__item">
                <a href="?mod=users&controller=index&action=filter_users&filter=Admintrator" class="select-input__item-link">
                  Quản trị viên
                </a>
              </li>
              <li class="select-input__item">
                <a href="?mod=users&controller=index&action=filter_users&filter=Customer" class="select-input__item-link">
                  Khách hàng
                </a>
              </li>

            </ul>
          </div>
        </div>
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
            if (!empty($list_user)) {
              //----------PAGGING----------//
              #Số bản ghi trên một trang
              $num_per_page = 5;
              #Tổng số bản ghi
              $total_row = count($list_user);
              #Số trang
              $num_page = ceil($total_row / $num_per_page);
              #Số trang hiện tại lấy từ URL xuống
              $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
              #Chỉ số miền bắt đầu mỗi trang
              $start = ($page - 1) * $num_per_page;
              $list_user_by_page = array_slice($list_user, $start, $num_per_page);

              $i = $start;
              foreach ($list_user_by_page as $user) {
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
            }
            ?>

          </tbody>
        </table>
        <?php
        if (!empty($list_user_by_page)) {
          echo get_pagging($num_page, $page, "?mod=product&controller=index&action=index");
        }
        ?>
      </div>
    </div>
  </div>
</div>

<?php
get_footer();
?>