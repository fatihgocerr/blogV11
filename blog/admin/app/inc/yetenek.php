                                  <?php                               


                                 $db->sql="select * from tb_skill";
                                 $yetenek=$db->select();


                                  $id=post("a");
                                  $skill=post("$yetenek->skill_name");
                                  $rate=post("c");



                                  $db->sql ="update tb_skill set skill_name =?, skill_rate=? where skill_id =?";
                                  $db->veri = array($skill,$rate,$id);
                                  $update=$db->update();

                                  if ($update==false) {
                                     echo "Yanlış Yoldasınnn";
                                 }
                                 else {echo "harikasın";}

                                 foreach ($yetenek as $key => $value) {

                                  
                                    ?>

                                    <div class="col-lg-6">
                                       <div class="col-lg-2">
                                                                                          
                                                <input class="form-control" name="a; ?>" value="<?php echo $value->skill_id ; ?>">
                                            </div>
                                        <div class="col-lg-5">
                                        
                                            <div class="form-group">
                                                <label>Yetenek</label>
                                                <input class="form-control" name="<?= $value->skill_name ; ?>" value="<?= $value->skill_name ; ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label>Oran</label>
                                                <input class="form-control" name="c" value="<?=$value->skill_rate ; ?>">
                                            </div>
                                        </div>
                                    </div>


                                <?php }
                                ?>