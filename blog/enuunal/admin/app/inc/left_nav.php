
                    <div class="navbar-default sidebar" role="navigation">
                        <div class="sidebar-nav navbar-collapse">
                            <ul class="nav" id="side-menu">
                              
                                <li>
                                    <a href="<?php echo URL;  ?>admin/index.php?url=dashboard"><i class="fa fa-dashboard fa-fw"></i> Admin Genel Bakış</a>
                                </li>

                                <li>
                                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> DENEYİM<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="<?php echo URL;?>#work" target="_blank">Görüntüle</a>
                                        </li>
                                         <li>
                                            <a href="index.php?url=deneyim_ekle">Ekle</a>
                                        </li>
                                        <li>
                                            <a href="index.php?url=deneyim">Listele</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-second-level -->
                                </li>


                           <!--     
                                <li>
                                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Kategori<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="index.php?url=kategori_ekle">Kategori Ekle</a>
                                        </li>
                                        <li>
                                            <a href="index.php?url=kategoriler">Kategoriler</a>
                                        </li>
                                    </ul>
                                  
                                </li>
                                    <li>
                                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> İçerik<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="index.php?url=icerik_ekle">İçerik Ekle</a>
                                        </li>
                                        <li>
                                            <a href="index.php?url=icerikler">İçerikler</a>
                                        </li>
                                    </ul>
                                   
                                </li>
                               <li>
                                    <a href="index.php?url=yorumlar"><i class="fa fa-bar-chart-o fa-fw"></i> Yorumlar</a>
                                </li>  HAZIRDA VAR AMA KULLANICI İSTEĞİNE GÖRE DEAKTİF -->
                                <?php 
                                 if ($_SESSION["member_authorization"]=="admin") 
                                    {  
                                        ?>


                                      <li>
                                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Hakkımda<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="<?php echo URL;?>#about" target="_blank">Görüntüle</a>
                                        </li>
                                        <li>
                                            <a href="index.php?url=hakkimda">Düzenle</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-second-level -->
                                </li>

     
                                <li>
                                      <a href="index.php?url=ayarlar"><i class="fa fa-bar-chart-o fa-fw"></i> Ayarlar</a>
                                </li>



                                  
                             <?php    
                               }  
                                ?>
                                
                            </ul>
                        </div>
                        <!-- /.sidebar-collapse -->
                    </div>