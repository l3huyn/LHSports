  <?php
get_header();
?>
<?php
get_sidebar();
?>
<div id="wp-content">
  <div id="content" class="container-fluid">
    <div class="card">
      <div class="card-header font-weight-bold">
        Thêm quản trị viên
      </div>
      <div class="card-body">
        <form method="POST" action="?mod=users&controller=index&action=add">
          <div class="form-group">
            <label for="name">Họ và tên</label>
            <input class="form-control" type="text" name="name" id="name">
          </div>
          <div class="form-group">
            <label for="username">Tên đăng nhập</label>
            <input class="form-control" type="text" name="username" id="username">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="text" name="email" id="email">
          </div>
          <div class="form-group">
            <label for="password">Mật khẩu</label>
            <input class="form-control" type="password" name="password" id="password">
          </div>

          <button type="submit" name="btn-add-admin" class="btn btn-primary">Thêm mới</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
get_footer();
?>