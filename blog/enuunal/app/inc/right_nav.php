 <div class="widget-sidebar">
      <h5 class="sidebar-title">Experiences</h5>
      <div class="sidebar-content">
        <ul class="list-sidebar">
          
            <?php 
            $db->sql="select * from tb_experience where eng=1";
            $experience=$db->select();
            foreach ($experience as $key => $value) {
              ?>
              <li>
                 <a href="index.php?url=deneyim&id=<?= $value->experience_id; ?>"><?= $value->experience_title ;?></a>
          </li>

              <?php 
             } ?>
           
          
        </ul>
      </div>
    </div>