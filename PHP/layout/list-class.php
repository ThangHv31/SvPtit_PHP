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
$sql = "SELECT * FROM class, list_teacher, semester , subject, user WHERE class.id_teacher = list_teacher.id_teacher AND class.id_semester = semester.id_semester AND class.id_subject=subject.id_subject AND user.id_User IN (SELECT list_teacher.id_User FROM list_teacher WHERE class.id_teacher = list_teacher.id_teacher) ORDER BY class.id_class ASC LIMIT $perRow, $rowsPerPage";
$query = mysqli_query($conn,$sql);
?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card strpied-tabled-with-hover">
        <div class="card-header ">
          <h4 class="card-title">Danh Sách Lớp Học</h4>
          <a href="admin.php?page_layout=add-class"><button type="button" class="btn btn-primary float-right mr-5">Thêm <i class="fas fa-plus"></i></button></a>
        </div>
        <div class="card-body table-full-width table-responsive">
          <table class="table table-hover table-striped">
            <thead>
              <th>Mã Lớp</th>
              <th>Tên Lớp</th>
              <th>Giảng Viên</th>
              <th>Môn Học</th>
              <th>Số Tín Chỉ</th>
              <th>Kì Học</th>
              <th>Tùy Chọn</th>
            </thead>
            <tbody>
             <?php
             while($row = mysqli_fetch_array($query)){
              ?>
              <tr>
                <td><?php echo $row['id_class'];?></td>
                <td><?php echo $row['className'];?> </td>
                <td><?php echo $row['firstName'];?>  <?php echo $row['lastName'];?></td>
                <td><?php echo $row['note'];?></td>
                <td><?php echo $row['credit'];?></td>
                <td><?php echo $row['semesterName'];?></td>
                <td>
                 <a href="admin.php?page_layout=edit-class&id_class=<?php echo $row['id_class'];?>"> <button type="button"  rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                  <i class="fa fa-edit" style="color: black;"></i> 
                </button></a>
                <a href="delete-class.php?id_class=<?php echo  $row['id_class']; ?>"> <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
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
    $totalRows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM class, list_teacher, semester , subject, user WHERE class.id_teacher = list_teacher.id_teacher AND class.id_semester = semester.id_semester AND class.id_subject=subject.id_subject AND user.id_User IN (SELECT list_teacher.id_User FROM list_teacher WHERE class.id_teacher = list_teacher.id_teacher)"));
    $totalPage = ceil($totalRows/$rowsPerPage);
    $listPage = '';
    for($i=1;$i<=$totalPage;$i++){
      if($i==$page){
        $listPage .= '<li class="page-item"><a class="page-link active" style="color: black;" href="admin.php?page_layout=list-class&page='.$i.'">'.$i.'</a></li>';
      }else{
        $listPage .= '<li class="page-item"><a class="page-link" style="color: black;" href="admin.php?page_layout=list-class&page='.$i.'">'.$i.'</a></li>';
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
