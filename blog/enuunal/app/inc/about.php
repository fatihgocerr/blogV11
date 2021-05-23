<div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-sm-6 col-md-5">
                    <div class="about-img">
                        <?php 
                  $db->sql="select * from tb_about where eng=1";
                  $about=$db->select(1); ?>
                      <img src="public/img/<?php echo "$about->profile_img"; ?>" class="img-fluid rounded b-shadow-a" alt="">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-7">
                   
                    <div class="about-info">
                      <p><span class="title-s">Name: </span> <span><?php echo $about->name; ?></span></p>
                      <p><span class="title-s">Profile: </span> <span><?php echo $about->unvan ; ?></span></p>
                      <p><span class="title-s">Mail: </span> <span><?php echo $about->mail; ?></span></p>
                      <p><span class="title-s">Telefon: </span> <span><?php echo $about->phone; ?></span></p>
                    </div>
                  </div>
                </div>
                <div class="skill-mf">
                  <p class="title-s">Skill</p>

                  <?php  
                  $db->sql= "select * from tb_skill where eng=1 limit 4";
                  $skill=$db->select();

                  foreach ($skill as $key => $value) {
                    ?>
                    <span><?=$value->skill_name ?></span> <span class="pull-right"><?=$value->skill_rate ?>%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: <?=$value->skill_rate ?>%;" aria-valuenow="95" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>

<?php
                  }
                  ?>


                  
               
                </div>
              </div>
              <div class="col-md-6">
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      About
                    </h5>
                  </div>

                 
                  <p class="lead">
                    <?php echo "$about->about" ;?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>