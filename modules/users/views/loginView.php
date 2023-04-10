<?php 
get_header('login_reg');
?>

<div class="web__login">
  <div class="app__login-signup">
    <div class="grid login-signup__container">
      <div class="login-signup__content" data-aos="flip-right">

        <form class="log-in__form" action="" method="post">
          <h1 class="login-signup__content-heading">Đăng nhập</h1>
          <div class="login-signup__content-box">
            <i class="login-signup__content-icon fa-solid fa-mobile"></i>
            <input name='username' type="text" class="login-signup__content-input" placeholder="Tên đăng nhập">
            <?php
              echo form_error('username');
            ?>
          </div>
          <div class="login-signup__content-box">
            <i class="login-signup__content-icon fa-solid fa-lock"></i>
            <input name='password' type="password" class="login-signup__content-input" placeholder="Mật khẩu">
            <?php
              echo form_error('password');
            ?>
          </div>
          <div class="login-signup__check-box">
            <div class="login-signup__remember-me">
              <input name='remember' type="checkbox">
              <span class="login-signup__remember-me-msg">Ghi nhớ tôi</span>
            </div>
            <div class="login-signup__forget-pass">
              <a href="" class="login-signup__forget-pass-link">
                Quên mật khẩu?
              </a>
            </div>
          </div>
          <button type="submit" name="btn-login" class="btn btn__login-signup">Đăng nhập</button>
        </form>

        
        <div class="form__account--exits">
          <span class="form__account--exits__msg">Bạn chưa có tài khoản?</span>
          <a href="?mod=users&controller=index&action=reg" class="account--exits__here">Đăng ký tại đây</a>
        </div>

        <div class="form__separate">
          <span class="form__separate-msg">Hoặc</span>
        </div>

        <div class="btn__continue">
          <button class="btn__continue-with btn__continue-with-facebook">
            <i class="btn__continue-icon fa-brands fa-facebook"></i>
            <span class="btn__continue-msg">Tiếp tục với Facebook</span>
          </button>

          <button class="btn__continue-with btn__continue-with-google">
            <img src="./assets/img/Google__G__Logo.svg.png" alt="" class="btn__continue-with-gg-img">
            <span class="btn__continue-msg">Tiếp tục với Google</span>
          </button>
        </div>

      </div>
    </div>
  </div>
</div>

<?php 
get_footer('login_reg');
?>