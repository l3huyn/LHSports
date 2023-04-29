<?php
get_header('login_reg');
?>

<div class="web__signup">
  <div class="app__login-signup">
    <div class="grid signup__container">
      <div class="signup__content">
        <form class="login-signup__form" action="?mod=users&controller=index&action=reg" method="POST">
          <h1 class="login-signup__content-heading">Đăng ký tài khoản</h1>
          <div class="login-signup__content-box">
            <i class="login-signup__content-icon fa-solid fa-user"></i>
            <input type="text" name="name" class="login-signup__content-input" placeholder="Họ và tên">
            <?php
              echo form_error('name');
            ?>
          </div>

          <div class="login-signup__content-box">
            <i class="login-signup__content-icon fa-solid fa-id-card"></i>
            <input type="text" name="username" class="login-signup__content-input" placeholder="Tên đăng nhập">
            <?php
              echo form_error('username');
            ?>
          </div>


          <div class="login-signup__content-box">
            <i class="login-signup__content-icon fa-solid fa-envelope"></i>
            <input type="text" name="emailUser" class="login-signup__content-input" placeholder="Email">
            <?php
              echo form_error('emailUser');
            ?>
          </div>

          <div class="login-signup__content-box">
            <i class="login-signup__content-icon fa-solid fa-lock"></i>
            <input type="password" name="password" class="login-signup__content-input" placeholder="Mật khẩu">
            <?php
              echo form_error('password');
            ?>
          </div>

          <button type="submit" name="btn-reg" class="btn btn__login-signup">Đăng ký</button>
        </form>

        <div class="form__account--exits">
          <span class="form__account--exits__msg">Bạn đã có tài khoản?</span>
          <a href="?mod=users&controller=index&action=login" class="account--exits__here">Đăng nhập tại đây</a>
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