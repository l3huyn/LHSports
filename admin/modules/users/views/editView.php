  <?php
  get_header();
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $info_user = get_user_by_id($id);
  }
  ?>
  <?php
  get_sidebar();
  ?>
  <div id="wp-content">
    <div id="content" class="container-fluid">
      <div class="card">
        <div class="card-header font-weight-bold">
          Thay đổi thông tin user
        </div>
        <div class="card-body">
          <form method="POST">
            <div class="form-group">
              <label for="name">Họ và tên</label>
              <input class="form-control" type="text" name="name" id="name" value="<?php echo $info_user['name'] ?>">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input class="form-control" type="text" name="email" id="email" value="<?php echo $info_user['emailUser'] ?>">
            </div>
            <div class="form-group">
              <label for="password">Mật khẩu</label>
              <input class="form-control" type="password" name="password" id="password" value="<?php echo $info_user['password'] ?>">
            </div>

            <div class="form-group">
              <label for="cellphone">Số điện thoại</label>
              <input class="form-control" type="text" name="cellphone" id="cellphone" value="<?php echo $info_user['cellphone'] ?>">
            </div>

            <div class="form-group">
              <label for="">Nhóm quyền</label>
              <select name="authority" class="form-control" id="">
                <option>Chọn quyền</option>
                <option <?php if (isset($info_user['authority']) && $info_user['authority'] == 'Admintrator') {
                          echo "selected='selected'";
                        } ?> value="Admintrator">Quản trị viên</option>
                <option <?php if (isset($info_user['authority']) && $info_user['authority'] == 'Customer') {
                          echo "selected='selected'";
                        } ?> value="Customer">Khách hàng</option>
              </select>
            </div>

            <button type="submit" name="btn-update-user" class="btn btn-primary">Thêm mới</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php
  get_footer();
  ?>