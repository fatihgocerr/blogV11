<?php  
require 'inc/top.php';

?>

<body>
  <!--/ Nav Star /-->
  <?php 
  require 'inc/nav2.php';
  ?>
  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
  <div class="intro intro-single route bg-image" style="background-image: url(public/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <h2 class="intro-title mb-4">TÜM İÇERİKLER</h2>

        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->
  <?php 
  if (!get("id")) {
   header("location:index.php");
   exit();

 }

 $id=(int)get("id");
 $db->sql = "select * from tb_experience where experience_id=?";
 $db->veri=array($id);
 $icerik=$db->select(1);


 if ($icerik==false) {
   header("location:index.php");
   exit();
   ?>
   <div class="card card-blog"> İçerik Bulunamadı </div>
   <?php
 }

 $hit=$icerik->hit;
 $hit++;
 $db->sql="update tb_experience set hit=? where experience_id=?";
 $db->veri=array($hit,$id);
 $db->insert();


 ?>
 <!--/ Section Blog-Single Star /-->
 <section class="blog-wrapper sect-pt4" id="blog">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="post-box">
          <div class="post-thumb">

            <a href="public/img/<?= $icerik->experience_img ?>" data-lightbox="gallery-mf">

            <img src="public/img/<?php echo "$icerik->experience_img"; ?>" class="img-fluid" alt="">
            </a>
          </div>
          <div class="post-meta">
            <h1 class="article-title"><?= $icerik->experience_title ?></h1>
            <ul>
              <li>
                <span class="ion-ios-person"></span>
                <a href="#"><?php echo "ekleyen"; ?></a>
              </li>
              <li>
                <span class="ion-pricetag"></span>
                <a href="#">Web Design</a>
              </li>
              <li>
                <span class="ion-chatbox"></span>
                <a href="#"><?= $icerik->hit ?></a>
              </li>
            </ul>
          </div>
          <div class="article-content">
           <?= $icerik->experience_content ?>
         </div>
       </div>
      
    



  </div>



  <div class="col-md-4">
    
   <?php require 'inc/right_nav.php'; ?>


  </div>
</div>
</div>
</section>
<!--/ Section Blog-Single End /-->

<!--/ Section Contact-Footer Star /-->
<section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(public/img/overlay-bg.jpg)">
  <div class="overlay-mf"></div>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong>DevFolio</strong>. All Rights Reserved</p>
            <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
                -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <!--/ Section Contact-footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="public/lib/jquery/jquery.min.js"></script>
  <script src="public/lib/jquery/jquery-migrate.min.js"></script>
  <script src="public/lib/popper/popper.min.js"></script>
  <script src="public/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="public/lib/easing/easing.min.js"></script>
  <script src="public/lib/counterup/jquery.waypoints.min.js"></script>
  <script src="public/lib/counterup/jquery.counterup.js"></script>
  <script src="public/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="public/lib/lightbox/js/lightbox.min.js"></script>
  <script src="public/lib/typed/typed.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="public/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="public/js/main.js"></script>

</body>
</html>
