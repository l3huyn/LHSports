<?php
get_header('login_reg');
?>

<div class="web__login">
  <div class="app__login-signup">
    <div class="grid login-signup__container">
      <div class="login-signup__content" data-aos="flip-right">

        <form class="log-in__form" method="POST">
          <h1 class="login-signup__content-heading">Thiết lập mật khẩu mới</h1>
          <div class="login-signup__content-box">
            <i class="login-signup__content-icon fa-solid fa-lock"></i>
            <input name='password' type="password" class="login-signup__content-input" placeholder="Password">
            <?php
            echo form_error('password');
            ?>
          </div>

          <button type="submit" name="btn-new-pass" class="btn btn__login-signup">Lưu mật khẩu</button>
          <?php
            echo form_error('account');
            ?>
        </form>

        <div class="form__account--exits">
          <a href="?mod=users&controller=index&action=login" class="account--exits__here">Đăng nhập</a> |
          <a href="?mod=users&controller=index&action=reg" class="account--exits__here">Đăng ký</a>
        </div>
      
      </div>
    </div>
  </div>
</div>

<?php
get_footer('login_reg');
?>