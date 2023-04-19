<?php
get_header();
?>

<?php
get_sidebar();
?>

<div id="wp-content">
  <div id="content" class="container-fluid">
    <div class="card">
      <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
        <h5 class="m-0 ">Danh sách bài viết</h5>
      </div>
      <div class="card-body">
        <div class="analytic">
          <a href="" class="text-primary">Trạng thái 1<span class="text-muted">(10)</span></a>
          <a href="" class="text-primary">Trạng thái 2<span class="text-muted">(5)</span></a>
          <a href="" class="text-primary">Trạng thái 3<span class="text-muted">(20)</span></a>
        </div>
        <div class="form-action form-inline py-3">
          <select class="form-control mr-1" id="">
            <option>Chọn</option>
            <option>Tác vụ 1</option>
            <option>Tác vụ 2</option>
          </select>
          <input type="submit" name="btn-search" value="Áp dụng" class="btn btn-primary">
        </div>
        <table class="table table-striped table-checkall text-center">
          <thead>
            <tr>
              <th scope="col">STT</th>
              <th scope="col">Ảnh</th>
              <th scope="col">Tiêu đề</th>
              <th scope="col">Trạng thái</th>
              <th scope="col">Ngày tạo</th>
              <th scope="col">Tác vụ</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 0;
            foreach ($list_news_by_admin as $news) {
              $i++;
            ?>
              <tr>
                <td scope="row"><?php echo $i ?></td>
                <td><img style="width: 80px; height: 80px; object-fit:cover; border: 3px solid #ccc;" src="http://localhost/LHSports/admin/public/images/<?php echo $news['img_news'] ?>" alt=""></td>
                <td><p class="title-news"><?php echo $news['title_news'] ?></p></td>
                <td><?php echo $news['status_news'] ?></td>
                <td><?php echo $news['created_at'] ?></td>
                <td>
                  <a href="?mod=news&controller=index&action=detail&id=<?php echo $news['id_news']; ?>" class="btn btn-warning btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Show"><i class="fa-solid fa-eye"></i></a>
                  <a href="?mod=news&controller=index&action=edit&id=<?php echo $news['id_news']; ?>" class="btn btn-success btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                  <a href="?mod=news&controller=index&action=delete&id=<?php echo $news['id_news']; ?>" class="btn btn-danger btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
            <?php
            }
            ?>


          </tbody>
        </table>
        <!-- <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">Trước</span>
                <span class="sr-only">Sau</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav> -->
      </div>
    </div>
  </div>
</div>


<?php
get_footer();
?>