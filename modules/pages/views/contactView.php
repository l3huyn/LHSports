<?php
get_header();
?>

<div class="app__container app__container-contact">
  <div class="grid contact__content">
    <div class="grid__column-6">
      <div class="contact__header">
        <span class="contact__header-heading">Nếu bạn có thắc mắc hãy liên hệ chúng tôi</span>
        <span class="contact__header-item">
          Hotline:
          <a class="contact__header--link" href="">0857272139</a>
        </span>
        <span class="contact__header-item">
          Email:
          <a class="contact__header--link" href="">huynhle.work@gmail.com</a>
        </span>
      </div>

      <div class="contact__form">
        <h3 class="contact__form-heading">Liên hệ với chúng tôi</h3>
        <p class="contact__form--desc">Chúng tôi mong muốn lắng nghe từ bạn. Hãy liên hệ với chúng tôi và một thành viên của chúng tôi sẽ liên lạc với bạn trong thời gian sớm nhất. Chúng tôi yêu thích việc nhận được email của bạn mỗi ngày.</p>
        <form action="?mod=pages&controller=contact&action=contact" method="POST">
          <div class="contact__form-group">
            <input name="fullname" class="contact__form-input contact__form-input-first" type="text" placeholder="Họ và tên" required>
            <input name="email" class="contact__form-input" type="text" placeholder="Email của bạn" required>
          </div>
          <div class="contact__form-group">
            <input name="phone" class="contact__form-input" type="text" placeholder="Số điện thoại" required>
          </div>
          <div class="contact__form-group">
            <textarea placeholder="Nội dung" name="content" id="comment" class="contact__form-group-content" rows="10" required=""></textarea>
          </div>
          <button type="submit" name="btn-post" class="btn btn--primary contact--submit-btn">Gửi thông tin</button>
        </form>


      </div>

    </div>

    <div class="grid__column-6 contact__column-map">
      <div class="contact__map">
        <iframe class="contact__map-iframe" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3500.300131443691!2d105.76087613802373!3d10.02068599454567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1663665416627!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</div>

<?php
get_footer();
?>