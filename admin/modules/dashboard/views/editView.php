<?php
get_header();
?>
<?php
get_sidebar();
?>
<div id="wp-content">
  <div class="container-fluid py-5">
    <div class="card">
      <div class="card-header font-weight-bold">
        CẬP NHẬT ĐƠN HÀNG
      </div>
      <div class="card-body">
        <form method="POST">
          <div class="form-group">
            <label for="">Trạng thái đơn hàng</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="status_order" id="exampleRadios1" value="Đang xử lý" checked>
              <label class="form-check-label" for="exampleRadios1">
                Đang xử lý
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="status_order" id="exampleRadios2" value="Đã giao">
              <label class="form-check-label" for="exampleRadios2">
                Đã giao
              </label>
            </div>
          </div>

          <button type="submit" name="btn-update-order" class="btn btn-primary">Cập nhật</button>
        </form>
      </div>
    </div>

  </div>
</div>

<?php
get_footer();
?>