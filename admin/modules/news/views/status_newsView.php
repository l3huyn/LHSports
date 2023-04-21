<?php
get_header();

//Dem so bai viet cong khai
$count_public_news = get_number_public_news();
foreach($count_public_news as $news) {
  $number_public = $news['COUNT'];
}

//Dem so bai viet cho duyet
$count_pending_approval_news = get_number_pending_approval_news();
foreach($count_pending_approval_news as $news) {
  $number_pending_approval = $news['COUNT'];
}

?>

<?php
get_sidebar();
?>

<div id="wp-content">
  <div id="content" class="container-fluid">
    <div class="card">
      <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
        <h5 class="m-0 ">Bài viết theo trạng thái</h5>
      </div>
      <div class="card-body">
        <div class="analytic mb-4">
          <a href="?mod=news&controller=index&action=status_news&status=public" class="text-primary">Công khai<span class="text-muted">(<?php echo $number_public?>)</span></a>
          <a href="?mod=news&controller=index&action=status_news&status=pending_approval" class="text-primary">Chờ duyệt<span class="text-muted">(<?php echo $number_pending_approval?>)</span></a>
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
            foreach ($list_news as $news) {
              $i++;
            ?>
              <tr>
                <td scope="row"><?php echo $i ?></td>
                <td><img style="width: 80px; height: 80px; object-fit:cover; border: 3px solid #ccc;" src="http://localhost/LHSports/admin/public/images/<?php echo $news['img_news'] ?>" alt=""></td>
                <td><a href="?mod=news&controller=index&action=detail&id=<?php echo $news['id_news']; ?>" class="title-news"><?php echo $news['title_news'] ?></a></td>
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