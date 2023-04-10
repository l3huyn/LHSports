<?php
get_header();
?>

<div class="grid wide rounded bg-white mt-2" style="padding: 20px 0;">
  <form method="POST" enctype="multipart/form-data" class="mb-3">
    <div class="row">
      <div class="col-4 mb-3 " data-aos="fade-right">
        <?php
        if (!empty($_SESSION['user']['imgUser'])) {
        ?>
          <div class="d-flex flex-column align-items-center text-center p-3 fs-3"><img name="imgUser" style="width: 350px; height: 350px;  max-width: 100%; object-fit: cover; object-position: center;" class="rounded-pill avatar" width="300px" src="public/imgUser/<?php echo $_SESSION['user']['imgUser']; ?>">
          </div>
        <?php
        } else {
          echo "<div class='text-danger mb-3 text-center'><b>Không có hình ảnh hiển thị</b></div>";
        }
        ?>
        <div class="col fs-3 d-flex flex-column align-items-sm-center">
          <label class="mb-3" for="">Cập nhật ảnh đại diện</label>
          <input style="font-size: 16px; width: 204px;" type="file" name="imgUser" id="imgUser" class="file-upload">
        </div>
        <p><?php if (!empty($error['imgUser'])) echo $error['imgUser']; ?></p>
      </div>

      <div class="col-8 fs-3" data-aos="fade-left">
        <div class="p-4 pt-0">
          <div class="row mt-2">
            <div class="col">
              <label>Họ và tên</label>
              <input style="font-size: 16px;" name="name" type="text" class="form-control" value="<?php if (!empty($_SESSION['user']['name'])) echo $_SESSION['user']['name'] ?>">
              <p class="text-danger mt-2" style="font-size: 14px;"><?php if (!empty($error['name'])) echo $error['name']; ?></p>
            </div>

            <div class="col">
              <label>Số điện thoại</label>
              <input style="font-size: 16px;" type="text" name="cellphone" class="form-control" placeholder="Điền số điện thoại" value="<?php if (!empty($_SESSION['user']['cellphone'])) echo $_SESSION['user']['cellphone'] ?>">
              <p class="text-danger mt-2" style="font-size: 14px;"><?php if (!empty($error['cellphone'])) echo $error['cellphone']; ?></p>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col mb-3">
              <label>Email</label>
              <input style="font-size: 16px;" type="text" name="email" class="form-control" placeholder="" value="<?php if (!empty($_SESSION['user']['email'])) echo $_SESSION['user']['email'] ?>">
              <p class="text-danger mt-2" style="font-size: 14px;"><?php if (!empty($error['email'])) echo $error['email']; ?></p>
            </div>
          </div>

          <div class="col-12" style="padding: 0;">
            <label>Địa chỉ nhận hàng</label>
            <input style="font-size: 16px;" name="address" type="text" class="form-control" placeholder="Ghi rõ địa chỉ" value="<?php if (!empty($_SESSION['user']['address'])) echo $_SESSION['user']['address'] ?>">
            <p class="text-danger mt-2" style="font-size: 14px;"><?php if (!empty($error['address'])) echo $error['address']; ?></p>
          </div>

          <div class="col-12 mt-3" style="padding: 0;">
            <label>Mô tả</label>
            <textarea style="font-size: 16px;" rows="3" name="desc" type="text" class="form-control" placeholder="Hãy viết về bản thân của bạn" value="<?php if (!empty($_SESSION['user']['desc'])) echo $_SESSION['user']['desc'] ?>"></textarea>
          </div>
          <input type="hidden" name="id" value="">

          <div class="mt-3 ">
            <button class="btn btn--primary" type="submit" name="update_profile" value="update_profile">
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