<?php
  session_start();
	include 'connectDb.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">

  <title>SVPTIT</title>
  
  <link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <link href="../css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">SVPTIT</a></h1>


      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" class="active">Trang Chủ</a></li>
          <li><a href="#">Xem thời khóa biểu</a></li>
          <li><a href="#">Xem Điểm Thi</a></li>
          <li><a href="contact.php">Liên Hệ</a></li>

          <li><a href="./signIn.php" class="getstarted"><?php
          if(isset($_SESSION['tk'])){
               echo $_SESSION['tk'];
             }else{
              echo "Đăng Nhập";
             }
          
          ?></a></li>
           <li><a href="signOut.php" class="getstarted">
              Đăng Xuất
            </a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(../images/slide/slide-1.jpg)">

        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(../images/slide/slide-2.jpg)">

        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(../images/slide/slide-3.jpg)">

        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">
   <!-- ======= Gioi Thieu ======= -->

   <!-- ======= Services Section ======= -->
   <section id="services" class="services">
    <div class="container">

      <div class="row content">
        <div class="align-items-center pb-3">
          <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

              <div class="d-flex justify-content-between align-items-center">
                <h2>Giới Thiệu</h2>

              </div>

            </div>
          </section><!-- End Breadcrumbs -->
        </div>
        <div class="col-lg-6 align-items-center p-5">
          <h2 style="text-align: center; color: red;">SVPTIT</h2>
          <h3>Trang web hỗ trợ học tập dành cho sinh viên của Học Viện Công Nghệ Bưu Chính Viễn Thông</h3>
        </div>
        <div class="col-lg-6 pt-4  p-5">
          <p>
            Trang web hỗ trợ học tập SVPTIT giúp sinh viên có thể dễ dàng nắm được thông tin về thới khóa biểu, lớp học cũng như theo dõi tin tức mới nhất từ nhà trường. 
          </p>
          <ul>
            <li><i class="ri-check-double-line"></i> Xem danh sách môn học</li>
            <li><i class="ri-check-double-line"></i> Xem điểm môn học</li>
            <li><i class="ri-check-double-line"></i> Theo dõi tin tức mới nhất của Học Viện</li>
          </ul>

        </div>
      </div>

    </div>
    <div class="container">

      <div class="row">
        <div class="col-md-6">
          <div class="icon-box">
            <i class="bi bi-calendar4-week"></i>
            <h4><a href="#">Xem lịch học</a></h4>
            <p>Theo dõi lịch học cá nhân một cách dễ dàng và chính xác nhất</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="bi bi-card-checklist"></i>
            <h4><a href="#">Xem điểm thi</a></h4>
            <p>Cập nhập điểm thi một cách nhanh chóng và dễ dàng</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="bi bi-newspaper"></i>
            <h4><a href="#">Theo dõi tin tức mới nhất từ Học Viện</a></h4>
            <p>Theo dỗi tin tức để không bỏ qua các tin quan trọng của học viện</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="bi bi-reply-all-fill"></i>
            <h4><a href="#">Gửi Phản Hồi</a></h4>
            <p>Gửi phản hồi nếu có bất cứ thắc</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Services Section -->
  <section>
    <div class="container">
      <section id="breadcrumbs" class="breadcrumbs mb-5">
        <div class="container">

          <div class="d-flex justify-content-between align-items-center">
            <h2>Tin Tức</h2>

          </div>

        </div>
      </section><!-- End Breadcrumbs -->
      <div class="container">
       <ul id="autoWidth" class="cs-hidden">
        <li class="item-a">
          <div class="box">
            <div class="slide-img">
              <img src="../images/blog/blog-1.jpg" alt="" />
              <div class="overlay">
                <a  class="buy-btn">Chi Tiết</a>
              </div>
            </div>
            <div class="detail-box">

              <a href="#" class="price">Thư chúc mừng của Giám Đốc Học Viện nhân ngày 20-11</a> 

            </div>
          </div>
        </li>

        <li class="item-a">
          <div class="box">
            <div class="slide-img">
              <img src="../images/blog/blog-2.jpg" alt="" />
              <div class="overlay">
                <a  class="buy-btn">Chi
                Tiết</a>
              </div>
            </div>
            <div class="detail-box">

              <a href="#" class="price">Viettel và PTIT ký biên bản ghi nhớ về khoa học công nghệ và chuyển đổi số</a> 

            </div>
          </li>

          <li class="item-a">
            <div class="box">
              <div class="slide-img">
                <img src="../images/blog/blog-3.jpg" alt="" />
                <div class="overlay">
                  <a class="buy-btn">Chi Tiết</a>
                </div>
              </div>
              <div class="detail-box">

                <a href="#" class="price">Sinh viên PTIT nhận được sự quan tâm lớn của cộng đồng doanh nghiệp số</a>
              </div>
            </div>
          </li>
        </ul>
        <ul id="autoWidth" class="cs-hidden">
        <li class="item-a">
          <div class="box">
            <div class="slide-img">
              <img src="../images/blog/blog-1.jpg" alt="" />
              <div class="overlay">
                <a  class="buy-btn">Chi Tiết</a>
              </div>
            </div>
            <div class="detail-box">

              <a href="#" class="price">Thư chúc mừng của Giám Đốc Học Viện nhân ngày 20-11</a> 

            </div>
          </div>
        </li>

        <li class="item-a">
          <div class="box">
            <div class="slide-img">
              <img src="../images/blog/blog-2.jpg" alt="" />
              <div class="overlay">
                <a  class="buy-btn">Chi
                Tiết</a>
              </div>
            </div>
            <div class="detail-box">

              <a href="#" class="price">Viettel và PTIT ký biên bản ghi nhớ về khoa học công nghệ và chuyển đổi số</a> 

            </div>
          </li>

          <li class="item-a">
            <div class="box">
              <div class="slide-img">
                <img src="../images/blog/blog-3.jpg" alt="" />
                <div class="overlay">
                  <a class="buy-btn">Chi Tiết</a>
                </div>
              </div>
              <div class="detail-box">

                <a href="#" class="price">Sinh viên PTIT nhận được sự quan tâm lớn của cộng đồng doanh nghiệp số</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div style="text-align: center; margin-bottom: 3%;">
        <a href="/search?searchText=găng" style="text-decoration: none;">Xem
          Tất Cả <i class="bi bi-geo-alt"></i></a>
        </div>
      </section>
      <!-- ======= Portfolio Section ======= -->


      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <section id="breadcrumbs" class="breadcrumbs">
          <div class="container col-9">

            <div class="d-flex justify-content-between align-items-center ">
              <h2>Liên Hệ</h2>

            </div>

          </div>
        </section><!-- End Breadcrumbs -->
        <div class="container">

          <div class="row mt-5">

            <div class="col-lg-4">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Địa chỉ:</h4>
                  <p>Km 10 Nguyễn Trãi, Hà Đông, Hà Nội</p>
                </div>

                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>svptit@gmail.com</p>
                </div>

                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Liên Hệ SĐT:</h4>
                  <p>+8488888888</p>
                </div>

              </div>

            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">

              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Họ Tên" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Tiêu đề" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Lời Nhắn" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Phản hồi đã được gửi! Xin cảm ơn!</div>
                </div>
                <div class="text-center"><button type="submit">Gửi Phản Hồi</button></div>
              </form>

            </div>

          </div>
          <div class="mt-5">
            <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.302548994672!2d105.78573631476245!3d20.98050598602458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135accdd8a1ad71%3A0xa2f9b16036648187!2zSOG7jWMgdmnhu4duIEPDtG5nIG5naOG7hyBCxrB1IGNow61uaCB2aeG7hW4gdGjDtG5n!5e0!3m2!1svi!2s!4v1637128341863!5m2!1svi!2s" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
    </section><!-- En
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>SVPTIT</h3>
              <p>
                Km10 Nguyễn Trãi <br>
                Hà Đông, Hà Nội<br><br>
                <strong>Phone:</strong> +84 88888888<br>
                <strong>Email:</strong> svptit@gmail.com<br>
              </p>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Danh Mục</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Trang chủ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Xem Lịch Học</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Xem điểm</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Liên Hệ</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">

           <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FHocvienPTIT&tabs=timeline&width=300&height=200&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="400" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>


         </div>

         <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4>Đăng kí ngay</h4>
          <p>Đăng kí để nhận thông báo mới nhất</p>
          <form action="" method="post">
            <input type="email" name="email"><input type="submit" value="Đăng Kí">
          </form>

        </div>

      </div>
    </div>
  </div>


</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- boostrap JS Files -->
<script src="../css/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="source/boostrap/glightbox/js/glightbox.min.js"></script>
<script src="source/boostrap/isotope-layout/isotope.pkgd.min.js"></script>
<script src="source/boostrap/php-email-form/validate.js"></script>
<script src="source/boostrap/swiper/swiper-bundle.min.js"></script>
<script src="source/boostrap/waypoints/noframework.waypoints.js"></script>

<!-- Template Main JS File -->
<script src="../js/jsp.js"></script>

</body>

</html>