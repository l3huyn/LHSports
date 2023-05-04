<?php
get_header('login_reg');
?>

<div class="web__login">
  <div class="app__login-signup">
    <div class="grid login-signup__container">
      <div class="login-signup__content" data-aos="flip-right">

        <form class="log-in__form" action="?mod=users&controller=index&action=reset" method="post">
          <h1 class="login-signup__content-heading">Khôi phục mật khẩu</h1>
          <div class="login-signup__content-box">
            <i class="login-signup__content-icon fa-solid fa-envelope"></i>
            <input name='email' type="email" class="login-signup__content-input" placeholder="Email">
            <?php
            echo form_error('email');
            ?>
          </div>

          <button type="submit" name="btn-reset" class="btn btn__login-signup">Gửi yêu cầu</button>
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