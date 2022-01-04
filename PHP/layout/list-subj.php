<?php
include_once 'connectDb.php';
if (isset($_GET['page'])) {
  $page=$_GET['page'];
  
}
else{
  $page =1; 
}
$rowsPerPage = 3;
$perRow = $page*$rowsPerPage - $rowsPerPage;
$sql = "SELECT * FROM subject ORDER BY id_subject ASC LIMIT $perRow, $rowsPerPage";
$query = mysqli_query($conn,$sql);
?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card strpied-tabled-with-hover">
        <div class="card-header ">
          <h4 class="card-title">Danh Sách Môn Học</h4>
         <a href="admin.php?page_layout=add-subj"><button type="button" class="btn btn-primary float-right mr-5">Thêm <i class="fas fa-plus"></i></button></a>
        </div>
        <div class="card-body table-full-width table-responsive">
          <table class="table table-hover table-striped">
            <thead>
              <th>Mã Môn Học</th>
              <th>Tên Môn Học</th>
              <th>Số Tín Chỉ</th>
              <th>Tùy Chọn</th>
            </thead>
            <tbody>
              <?php
              while($row = mysqli_fetch_array($query)){
                ?>
                <tr>
                  <td><?php echo $row['id_subject'];?></td>
                  <td><?php echo $row['subjectName'];?></td>
                  <td><?php echo $row['credit'];?></td>
                  
                  <td>
                   <a href="admin.php?page_layout=edit-subj&id_subject=<?php echo $row['id_subject'];?>"> <button type="button"  rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                    <i class="fa fa-edit" style="color: black;"></i> 
                  </button></a>
                  <a href="delete-subj.php?id_subject=<?php echo  $row['id_subject']; ?>"> <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                    <i class="fa fa-times" style="color: black;"></i> 
                  </button>
                </a>
              </td>
            </tr>
            <?php
          }
          ?>
        </tbody>
      </table>

      <?php
      $totalRows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM subject ORDER BY id_subject ASC"));
      $totalPage = ceil($totalRows/$rowsPerPage);
      $listPage = '';
      for($i=1;$i<=$totalPage;$i++){
        if($i==$page){
          $listPage .= '<li class="page-item"><a class="page-link active" style="color: black;" href="admin.php?page_layout=list-subj&page='.$i.'">'.$i.'</a></li>';
        }else{
          $listPage .= '<li class="page-item"><a class="page-link" style="color: black;" href="admin.php?page_layout=list-subj&page='.$i.'">'.$i.'</a></li>';
        }
      }
      ?>
      <nav aria-label="Page navigation example">
        <ul class="pagination ">
          <?php 

          echo $listPage;
          ?>


        </ul>
      </nav>
    </div>
  </div>
</div>

</div>
</div>
