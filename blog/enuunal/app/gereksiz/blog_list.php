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
 $db->sql = "select * from tb_content where content_id=?";
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
 $db->sql="update tb_content set hit=? where content_id=?";
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
            <img src="public/img/<?php echo "$icerik->content_image"; ?>" class="img-fluid" alt="">
          </div>
          <div class="post-meta">
            <h1 class="article-title"><?= $icerik->content_header ?></h1>
            <ul>
              <li>
                <span class="ion-ios-person"></span>
                <a href="#"><?= $icerik->adding ?></a>
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
           <?= $icerik->content_detail ?>
         </div>
       </div>
       <div class="box-comments">
        <div class="title-box-2">
          <h4 class="title-comments title-left">Comments (34)</h4>
        </div>
        


          <?php 
          if (pisset()) {
            $isim=post("isim");
            $mail=post("mail");
            $website=post("website");
            $yorum=post("yorum");
            $tarih=date("Y-m-d");

            $db->sql = "insert into tb_comment set comment_email=?, comment_content=?, comment_web=?, comment_content_id=?,  comment_name=?,  comment_date=?";
            $db->veri = array($mail,$yorum,$website,$id,$isim,$tarih);
            $ekle=$db->insert();

            if ($ekle) {
             $yorum_kaydet= '<div class="alert alert-success"><strong>BAŞARILI</strong>Yorumunuz Kaydedildi!</div>';
           }
           else{
            $yorum_kaydet= '<div class="alert alert-danger"><strong>BAŞARISIZ</strong>Yorumunuz Kaydedilemedi Lütfen Tekrar Deneyin!</div>';
          }

        }
           ?>

<ul class="list-comments">
  <?php 
        $db->sql="select * from tb_comment where comment_content_id =? and comment_confirm =? order by comment_id desc";
        $db->veri=array($id,1);
        $yorumlar=$db->select();
        if ($yorumlar!=false) {
        
        foreach ($yorumlar as $key => $value) {
          
         ?>



        <li>
          <div class="comment-avatar">
            <img src="public/img/testimonial-4.jpg" alt="">
          </div>
          <div class="comment-details">
            <h4 class="comment-author"><?= $value->comment_name; ?></h4>
            <span><?= $value->comment_date ?></span>
            <p>
             <?= $value->comment_content ?>
            </p>
          <!--  <a href="3">Reply</a>  -->
          </div>
        </li>

   <?php
        }
        }
        else{
          print_r($yorumlar);
        }
        ?>






      </ul>
    </div>
    <div class="form-comments">
      <div class="title-box-2">
        <h3 class="title-left">
          Leave a Reply
        </h3>
      </div>

      <?php 
      if (isset($yorum_kaydet)) {echo $yorum_kaydet;}
      ?>

      <form class="form-mf" method="post"        >
        <div class="row">
          <div class="col-md-6 mb-3">
            <div class="form-group">
              <input type="text" class="form-control input-mf" id="" name="isim" placeholder="Name *" required>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="form-group">
              <input type="email" class="form-control input-mf" id="" name="mail" placeholder="Email *" required>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="form-group">
              <input type="url" class="form-control input-mf" id="" name="website" placeholder="Website">
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="form-group">
              <textarea id="textMessage" class="form-control input-mf" placeholder="Comment *" name="yorum"
              cols="45" rows="8" required></textarea>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="button button-a button-big button-rouded" name="">Yorum Yap</button>
          </div>
        </div>
      </form>
    </div>
  </div>



  <div class="col-md-4">
    <div class="widget-sidebar sidebar-search">
      <h5 class="sidebar-title">Search</h5>
      <div class="sidebar-content">
        <form>
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-secondary btn-search" type="button">
                <span class="ion-android-search"></span>
              </button>
            </span>
          </div>
        </form>
      </div>
    </div>
    <div class="widget-sidebar">
      <h5 class="sidebar-title">Recent Post</h5>
      <div class="sidebar-content">
        <ul class="list-sidebar">
          <li>
            <a href="#">Atque placeat maiores.</a>
          </li>
          <li>
            <a href="#">Lorem ipsum dolor sit amet consectetur</a>
          </li>
          <li>
            <a href="#">Nam quo autem exercitationem.</a>
          </li>
          <li>
            <a href="#">Atque placeat maiores nam quo autem</a>
          </li>
          <li>
            <a href="#">Nam quo autem exercitationem.</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="widget-sidebar">
      <h5 class="sidebar-title">Archives</h5>
      <div class="sidebar-content">
        <ul class="list-sidebar">
          <li>
            <a href="#">September, 2017.</a>
          </li>
          <li>
            <a href="#">April, 2017.</a>
          </li>
          <li>
            <a href="#">Nam quo autem exercitationem.</a>
          </li>
          <li>
            <a href="#">Atque placeat maiores nam quo autem</a>
          </li>
          <li>
            <a href="#">Nam quo autem exercitationem.</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="widget-sidebar widget-tags">
      <h5 class="sidebar-title">Tags</h5>
      <div class="sidebar-content">
        <ul>
          <li>
            <a href="#">Web.</a>
          </li>
          <li>
            <a href="#">Design.</a>
          </li>
          <li>
            <a href="#">Travel.</a>
          </li>
          <li>
            <a href="#">Photoshop</a>
          </li>
          <li>
            <a href="#">Corel Draw</a>
          </li>
          <li>
            <a href="#">JavaScript</a>
          </li>
        </ul>
      </div>
    </div>
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
