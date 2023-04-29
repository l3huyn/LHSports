<?php
get_header();

if(!empty($_SESSION['user']['id'])) {
  $id = $_SESSION['user']['id'];
  $info_user = get_user_by_id($id);
}
?>

<div class="grid wide rounded bg-white mt-2" style="padding: 20px 0;">
  <form method="POST" action="?mod=users&controller=index&action=profile" enctype="multipart/form-data" class="mb-3">
    <div class="row">
      <div class="col-4 mb-3 " data-aos="fade-right">
        
          <div class="d-flex flex-column align-items-center text-center p-3 fs-3"><img name="imgUser" style="width: 350px; height: 350px;  max-width: 100%; object-fit: cover; object-position: center;" class="rounded-pill avatar" width="300px" src="public/img-user/<?php echo $info_user['imgUser'] ?>">
          </div>
        
        <div class="col fs-3 d-flex flex-column align-items-sm-center">
          <label class="mb-3" for="">Cập nhật ảnh đại diện</label>
          <input style="font-size: 16px; width: 204px;" type="file" name="imgUser" id="imgUser" class="file-upload">
          <?php echo form_error('imgUser') ?>

        </div>
      </div>

      <div class="col-8 fs-3" data-aos="fade-left">
        <div class="p-4 pt-0">
          <div class="row mt-2">
            <div class="col">
              <label>Họ và tên</label>
              <input style="font-size: 16px;" name="name" type="text" class="form-control" value="<?php echo $info_user['name'] ?>">
             <?php echo form_error('name') ?>
            </div>

            <div class="col">
              <label>Số điện thoại</label>
              <input style="font-size: 16px;" type="text" name="cellphone" class="form-control" placeholder="Điền số điện thoại" value="<?php echo $info_user['cellphone'] ?>">
              <?php echo form_error('cellphone') ?>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col mb-3">
              <label>Email</label>
              <input style="font-size: 16px;" type="text" name="email" class="form-control" placeholder="" value="<?php echo $info_user['emailUser'] ?>">
              <?php echo form_error('email') ?>
            </div>
          </div>

          <div class="col-12" style="padding: 0;">
            <label>Địa chỉ nhận hàng</label>
            <input style="font-size: 16px;" name="address" type="text" class="form-control" placeholder="Ghi rõ địa chỉ" value="<?php echo $info_user['addressUser'] ?>">
            <?php echo form_error('address') ?>
          </div>

          <div class="col-12 mt-3" style="padding: 0;">
            <label>Mô tả</label>
            <textarea style="font-size: 16px;" rows="3" name="desc" type="text" class="form-control" placeholder="Hãy viết về bản thân của bạn"><?php echo $info_user['descUser'] ?></textarea>
          </div>

          <div class="mt-3 ">
            <button class="btn btn--primary" type="submit" name="btn-update-profile" value="update_profile">
              Cập nhật thông tin
            </button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

<?php
get_footer();
?>