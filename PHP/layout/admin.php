<?php
session_start();
include_once('connectDb.php');

if($_SESSION["tk"]=="hoangthang@gmail.com"&&$_SESSION["mk"]=="12456"){
  ?>
  <!DOCTYPE html>

  <html lang="en">

  <head>
    <meta charset="utf-8" />
    <title>Showroom Car</title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="../css/admin.css" rel="stylesheet" />
  </head>

  <body>
    <div class="wrapper">
      <div class="sidebar" >

        <div class="sidebar-wrapper">
          <div class="logo">
            <a href="index.php" class="simple-text">
              SHOWROOM CAR
            </a>
          </div>
          <ul class="nav">
            <li class="nav-item active">
              <a class="nav-link" href="admin.php">
               <i class="bi bi-house-door-fill"></i>
               <p>Trang chủ</p>
             </a>
           </li>
           <li>
            <a class="nav-link" href="admin.php?page_layout=list-user">
              <i class="bi bi-file-person"></i>
              <p>Danh Sách Hóa Đơn</p>
            </a>
          </li>
          <!-- <li>
            <a class="nav-link" href="admin.php?page_layout=list-stu">
              <i class="bi bi-view-list"></i>
              <p>Quản lí Học Viên</p>
            </a>
          </li>
          <li>
            <a class="nav-link" href="admin.php?page_layout=list-subj">
              <i class="bi bi-table"></i>
              <p>Quản lí Môn Học</p>
            </a>
          </li>
          <li>
            <a class="nav-link" href="admin.php?page_layout=list-tea">
              <i class="bi bi-table"></i>
              <p>Quản lí Giảng Viên</p>
            </a>
          </li>
          <li>
            <a class="nav-link" href="admin.php?page_layout=list-class">
             <i class="bi bi-table"></i>
             <p>Quản lí Lớp Học</p>
           </a>
         </li> -->
        
     </ul>
   </div>
 </div>
 <div class="main-panel">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
      <a class="navbar-brand mr-3" href="#pablo"> Admintranstor </a>

      <div class="collapse navbar-collapse justify-content-around" id="navigation">
        <div class="form_search">
          <form>
            <input type="text" placeholder="Nhập từ khóa..." name="search">
            <button>
              <i class="bi bi-search"></i>
            </button>
          </form>
        </div>
        <!-- Example split danger button -->
        <div class="btn-group">
          <button type="button" class="btn btn-danger">xin chào <span><?php echo $_SESSION['tk'];?></span></button>
          <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="signOut.php">Đăng Xuất <i class="fas fa-sign-out-alt"></i></a>

          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="content">

   <?php
   if(isset($_GET['page_layout'])){
    switch ($_GET['page_layout']){
     case 'list-stu': include_once('list-bill.php');break;
    //  case 'list-tea': include_once('list-tea.php');break;
    //  case 'list-subj': include_once('list-subj.php');break;
    //  case 'list-point': include_once('list-point.php');break;
    //  case 'list-class': include_once('list-class.php');break;
    //  case 'list-user': include_once('list-user.php');break;
    

     case 'add-stu': include_once('add-bill.php');break;
    //  case 'add-tea': include_once('add-tea.php');break;
    //  case 'add-subj': include_once('add-subj.php');break;
    //  case 'add-point': include_once('add-point.php');break;
    //  case 'add-class': include_once('add-class.php');break;
    //  case 'add-user': include_once('add-user.php');break;
     


     case 'edit-stu': include_once('edit-bill.php');break;
    //  case 'edit-tea': include_once('edit-tea.php');break;
    //  case 'edit-subj': include_once('edit-subj.php');break;
    //  case 'edit-point': include_once('edit-point.php');break;
    //  case 'edit-class': include_once('edit-class.php');break;
    //  case 'edit-user': include_once('edit-user.php');break;
     


     
   }
 }else{
  include_once('homeadmin.php');
}
?> 

</div>
</div>
<footer class="footer">
  <div class="container-fluid">
    <nav>
      <ul class="footer-menu">
        <li>
          <a href="#">
            Home
          </a>
        </li>
        <li>
          <a href="#">
            Company
          </a>
        </li>
        <li>
          <a href="#">
            Portfolio
          </a>
        </li>
        <li>
          <a href="#">
            Blog
          </a>
        </li>
      </ul>
    </nav>
  </div>
</footer>
</div>
</div>

</body>
<!--   Core JS Files   -->
<script src="../css/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../js/popper.min.js" type="text/javascript"></script>
<script src="../js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>


</html>
<?php
}else{
  header('location:index.php');
}


?>