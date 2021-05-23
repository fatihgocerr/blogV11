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
          <h2 class="intro-title mb-4">//</h2>

        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->

  <!--/ Section Blog-Single Star /-->
  <section class="blog-wrapper sect-pt4" id="blog">
    <div class="container">
      <div class="row">
        <div class="col-md-8">


         <section id="blog" class="blog-mf sect-pt4 route">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="title-box text-center">
                  <h3 class="title-a">
                    Blog
                  </h3>
                  <p class="subtitle-a">
                    Kendi tecrübelerimden bir kaç kesit
                  </p>
                  <div class="line-mf"></div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="card card-blog">

                  <?php 
                  $db->sql="select * from tb_content ";
                  $icerikler=$db->select();

                  if ($icerikler==false) {
                    ?>
                    <div class="card card-blog"> İçerik Bulunamadı </div>
                    <?php 
                  }else{

                    foreach ($icerikler as $key => $value) {
                     ?>


                     <div class="card-img">
                      <a href="index.php?url=blog_list&id=<?=$value->content_id ?>"><img src="public/img/<?php echo $value->content_image; ?>" alt="" class="img-fluid"></a>
                    </div>
                    <div class="card-body">
                      <div class="card-category-box">
                        <div class="card-category">
                          <h6 class="category">Travel</h6>
                        </div>
                      </div>
                      <h3 class="card-title"><p class="text-center"><?= $value->content_header ?></p></h3>
                      <p class="card-description">
                        <?=$value->content_description ?>

                      </div>
                      <div class="card-footer">
                        <div class="post-author">
                          <a href="#">
                            <img src="public/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                            <span class="author"><?php echo $value->adding ?></span>
                          </a>
                        </div>
                        <div class="post-date">
                          <span class="ion-ios-clock-outline"></span> 10 min
                        </div>
                      </div>


                      <?php 
                    }

                  }

                  ?>
                </div>
              </div>


            </div>

            <div class="row">
              <div class="col-sm-12">
                <div class="title-box text-center">
                  <h3 class="title-a">
                    <a href="index.php?url=blog-single"><button type="submit" class="button button-a button-big button-rouded">Daha Fazlası İçin</button></a>

                  </h3>

                  <div class="line-mf"></div>
                </div>
              </div>
            </div>

          </div>
        </section>

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
