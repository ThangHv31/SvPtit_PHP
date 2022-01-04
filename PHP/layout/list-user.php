<?php

if (isset($_GET['page'])) {
  $page=$_GET['page'];
  
}
else{
  $page =1; 
}
$rowsPerPage = 4;
$perRow = $page*$rowsPerPage - $rowsPerPage;

  $sql = "SELECT * FROM user WHERE status = '0' ORDER BY id_User ASC LIMIT $perRow, $rowsPerPage";  
$query = mysqli_query($conn,$sql);
?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card strpied-tabled-with-hover">
        <div class="card-header ">
          <h4 class="card-title">Danh Sách Người Dùng</h4>
          <a href="admin.php?page_layout=add-user"><button type="button" class="btn btn-primary float-right mr-5">Thêm </button></a>
        </div>
        <div class="card-body table-full-width table-responsive">
          <table class="table table-hover table-striped">
            <thead>
              <th>ID</th>
              <th>UserName</th>
              <th>Password</th>
              <th>Họ Tên</th>
              <th>Ngày Sinh</th>
              <th>Email</th>
              <th>Giới Tính</th>
              <th>Tùy Chọn</th>
            </thead>
            <tbody>
              <?php
              while($row = mysqli_fetch_array($query)){
                ?>
                <tr>
                  <td><?php echo $row['id_User'];?></td>
                  <td><?php echo $row['username'];?></td>
                  <td><?php echo $row['password'];?></td>
                  <td><?php echo $row['firstName'];?>  <?php echo $row['lastName'];?></td>
                  <td><?php echo $row['dateOfBirth'];?></td>
                  <td><?php echo $row['email'];?></td>
                  <td><?php echo $row['gender'];?></td>
                  
                  <td>
                   <a href="admin.php?page_layout=edit-user&id_User=<?php echo $row['id_User'];?>"> <button type="button"  rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                    <i class="fa fa-edit" style="color: black;"></i> 
                  </button></a>
                  <a href="delete-user.php?id_User=<?php echo  $row['id_User']; ?>"> <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
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
       $totalRows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM user WHERE status = '0'"));
       $totalPage = ceil($totalRows/$rowsPerPage);
       $listPage = '';
       for($i=1;$i<=$totalPage;$i++){
            if($i==$page){
                $listPage .= '<li class="page-item"><a class="page-link active" style="color: black;" href="admin.php?page_layout=list-user&page='.$i.'">'.$i.'</a></li>';
            }else{
                $listPage .= '<li class="page-item"><a class="page-link" style="color: black;" href="admin.php?page_layout=list-user&page='.$i.'">'.$i.'</a></li>';
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
