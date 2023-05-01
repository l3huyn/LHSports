<?php
get_header();
if(!empty($_SESSION['admin']['id'])) {
  $id = $_SESSION['admin']['id'];
  $info_admin = get_admin_by_id($id);
}
?>
<?php
get_sidebar();
?>

<div id="wp-content">
  <div id="content" class="container-fluid p-5">
    <div class="card" style="border-radius: .5rem;">
      <div class="row g-0">
        <div class="col-md-4 gradient-custom text-center text-white" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
          <img src="http://localhost/LHSports/public/img-user/<?php echo $info_admin['imgUser'] ?>" alt="Avatar" class="img-fluid my-5" style="width: 100px; border: 4px solid #ccc;" />
          <h5><?php echo $info_admin['name'] ?></h5>
          <p><?php echo $info_admin['authority'] ?></p>
          <i class="far fa-edit mb-5"></i>
        </div>
        <div class="col-md-8">
          <div class="card-body p-4">
            <h6>Information</h6>
            <hr class="mt-0 mb-4">
            <div class="row pt-1">
              <div class="col-6 mb-3">
                <h6>Tên đăng nhập</h6>
                <p class="text-muted"><?php echo $info_admin['username'] ?></p>
              </div>
              <div class="col-6 mb-3">
                <h6>Email</h6>
                <p class="text-muted"><?php echo $info_admin['emailUser'] ?></p>
              </div>
              <div class="col-6 mb-3">
                <h6>Số điện thoại</h6>
                <p class="text-muted"><?php echo $info_admin['cellphone'] ?></p>
              </div>
              <div class="col-6 mb-3">
                <h6>Mô tả</h6>
                <p class="text-muted">Quản trị viên của LHSports</p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
get_footer();
?>